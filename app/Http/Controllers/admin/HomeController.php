<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home()
    {
        $customer = Customer::all();
        $donHang = Order::all();
        $sanPham = Product::all();

        $today =   Carbon::today();
        $orders =  Order::where('status', 'Đang giao hàng')
                        // ->whereDate('orderdate',$today)
                        ->get();

        $countCustomer = $customer->count();
        $demDonHang = $donHang->count();
        $tongSanPham =$sanPham->count();

        $successfulOrders = Order::where('status', 'Giao thành công')->count();
        $canceledOrders = Order::where('status', 'Đã hủy')->count();
        $deliverPercentage=Order::where('status', 'Đang giao hàng')->count();
        $successfulPercentage = $demDonHang > 0 ? ($successfulOrders / $demDonHang) * 100 : 0;
        $canceledPercentage = $demDonHang > 0 ? ($canceledOrders / $demDonHang) * 100 : 0;
        $deliverPercentage = $demDonHang > 0 ? ($deliverPercentage / $demDonHang) * 100 : 0;

        $tinhTongTien = Order::where('status', 'Giao thành công')->sum('money');
        return view('admin.layout.home', [
            'customer' => $customer,
            'countCustomer' => $countCustomer,
            'orders' => $orders,
            'demDonHang'=>$demDonHang,
            'tongSanPham'=> $tongSanPham,
            'successfulPercentage' => $successfulPercentage,
            'canceledPercentage' => $canceledPercentage,
            'deliverPercentage'=>$deliverPercentage,
            'tinhTongTien' => $tinhTongTien,
        ]);
    }

}
