<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function addToOrder(Request $request)
    {
        DB::beginTransaction();
        try {

            if (Session::has('UserID')) {
                // Xác thực các trường cần thiết
                $validatedData = $request->validate([
                    'firstname' => 'required|string|max:255',
                    'phone' => 'required|string|max:15',
                    'money' => 'required|numeric',
                    'address' => 'required|string|max:255',
                    'Cart' => 'required|array',
                    'Cart.*.product_id' => 'required|integer',
                    'Cart.*.quantity' => 'required|integer|min:1',
                    'Cart.*.price' => 'required|numeric',
                ]);

                // Tạo đơn hàng
                $order = Order::create([
                    'orderCode' => random_int(111111, 999999),
                    'customerid' => Session::get('UserID'),
                    'orderdate' => date('Y-m-d'),
                    'fullname' => $validatedData['firstname'],
                    'phone' => $validatedData['phone'],
                    'money' => $validatedData['money'],
                    'price_ship' => 300000,
                    'address' => $validatedData['address'],
                ]);

                // Thêm các sản phẩm vào giỏ hàng
                foreach ($request->Cart as $item) {
                    OrderDetail::create([
                        'orderid' => $order->id,
                        'productid' => $item['product_id'],
                        'count' => $item['quantity'],
                        'price' => $item['price'],
                    ]);
                    $cart_delete = Cart::where('customerID', session('UserID'))
                        ->where('ProductID', $item['product_id'])
                        ->first();
                    $cart_delete->delete();
                }
                DB::commit();
                return redirect()->back()->with('success', 'Order has been placed successfully.');
            } else {
                return redirect()->back()->with('error', 'User is not logged in.');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to place order: ' . $e->getMessage());
        }
    }
    public function index()
    {
        $product = Product::all();
        $orders = Order::paginate(10); // Đổi tên biến từ 'order' sang 'orders'
        return view(
            'admin.Order.index',
            [
                'orders' => $orders, // Đổi 'order' thành 'orders'
            ]
        );
    }
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id); // Tìm đơn hàng với id tương ứng

        $request->validate([
            'status' => 'required|string', // Đảm bảo rằng trường status được gửi lên và là kiểu chuỗi
        ]);
        // Cập nhật trạng thái của đơn hàng
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Cập nhật trạng thái đơn hàng thành công.');
    }
    public function status_Order()
    {
        return view('account.status_order.index');
    }
    public function showOrderToCustomer()
    {
        $donhang = null;
        if (Session::has("UserID")) {
            $donhang = Order::where('customerid', session('UserID'))
                ->get();
        }
        return view('account.Status_Order.index', [
            'donhang' => $donhang,
        ]);
    }
    public function State2()
    {
        $donhang = null;
        if (Session::has("UserID")) {
            $donhang = Order::where('status', '=', 'Chờ xử lý')
                ->where('customerid', session('UserID'))
                ->get();
        }
        return view('account.Status_Order.state2', [
            'donhang' => $donhang,
        ]);
    }
    public function State3()
    {
        $donhang = null;
        if (Session::has("UserID")) {
            $donhang = Order::where('status', '=', 'Đã xác nhận')
                ->where('customerid', session('UserID'))
                ->get();
        }
        return view('account.Status_Order.state3', [
            'donhang' => $donhang,
        ]);
    }
    public function State4()
    {
        $donhang = null;
        if (Session::has("UserID")) {
            $donhang = Order::where('status', '=', 'Đang chuyển hàng')
                ->where('customerid', session('UserID'))
                ->get();
        }
        return view('account.Status_Order.state4', [
            'donhang' => $donhang,
        ]);
    }
    public function State5()
    {
        $donhang = null;
        if (Session::has("UserID")) {
            $donhang = Order::where('status', '=', 'Đang giao hàng')
                ->where('customerid', session('UserID'))
                ->get();
        }
        return view('account.Status_Order.state5', [
            'donhang' => $donhang,
        ]);
    }
    public function State6()
    {
        $donhang = null;
        if (Session::has("UserID")) {
            $donhang = Order::where('status', '=', 'Đã hủy')
                ->where('customerid', session('UserID'))
                ->get();
        }
        return view('account.Status_Order.state6', [
            'donhang' => $donhang,
        ]);
    }
    public function State7()
    {
        $donhang = null;
        if (Session::has("UserID")) {
            $donhang = Order::where('status', '=', 'Giao thành công')
                ->where('customerid', session('UserID'))
                ->get();
        }
        return view('account.Status_Order.state7', [
            'donhang' => $donhang,
        ]);
    }

    public function editOrder($id)
    {
        // Tìm đơn hàng cần sửa
        $order = Order::findOrFail($id);

        return view('admin.Order.edit', compact('order'));
    }

    public function updateOrder(Request $request, $id)
    {
        // Xác thực dữ liệu nhập vào từ form sửa đơn hàng
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'money' => 'required|numeric',
            'address' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        // Tìm đơn hàng cần sửa
        $order = Order::findOrFail($id);

        // Cập nhật thông tin của đơn hàng
        $order->update([
            'fullname' => $validatedData['fullname'],
            'phone' => $validatedData['phone'],
            'money' => $validatedData['money'],
            'address' => $validatedData['address'],
            'status' => $validatedData['status'],
        ]);

        // Chuyển hướng người dùng về trang danh sách đơn hàng với thông báo thành công
        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được cập nhật thành công.');
    }
}
