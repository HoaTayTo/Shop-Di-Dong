<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Producer;
use App\Models\Config_products;
use App\Models\Images_related;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(10);

        return view('admin.product.index', [
            'product' => $product,
        ]);
    }

    public function showCategory()
    {
        $category = Category::all();
        return view('admin.Product.category', [
            'category' => $category,
        ]);
    }

    //show form add product
    public function showFormAddProduct()
    {
        $producer = Producer::all();
        $category = Category::all();
        return view('admin.Product.create', [
            'category' => $category,
            'producer' => $producer,
        ]);
    }

    // cái này để sử lý nút create product
    public function createSubmit(Request $request)
    {
        // Xác thực các trường từ yêu cầu
        $validatedData = $request->validate([
            'catid' => 'required|integer',
            'name' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Quy tắc xác thực ảnh
            'sortDesc' => 'nullable|string',
            'detail' => 'nullable|string',
            'producer' => 'nullable|string|max:255',
            'number' => 'required|integer',
            'number_buy' => 'nullable|integer',
            'sale' => 'nullable|numeric|min:0|max:100',
            'price' => 'required|numeric',
            'price_sale' => 'nullable|numeric',
            'created' => 'nullable|date',
            'created_by' => 'nullable|integer',
            'modified' => 'nullable|date',
            'modified_by' => 'nullable|integer',
            'trash' => 'nullable|boolean',
            'status' => 'nullable|boolean',
            'idcustomer' => 'nullable|integer',
        ]);

        // Xử lý file ảnh
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('Image_products'), $imageName);
            $validatedData['img'] = $imageName; // Lưu tên ảnh vào mảng dữ liệu đã xác thực
        }
        // Tạo sản phẩm mới
        Product::create($validatedData);

        // Redirect hoặc trả về phản hồi thành công
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    //-----------------------------UPDATE PRODUCT----------------------
    public function edit(string $id)
    {
        $producer = Producer::all();
        $category = Category::all();
        $product = Product::where("id", $id)->first();
        if (!isset($product)) {
            abort(404);
        }
        return view('admin.Product.updateProduct', [
            'product' => $product,
            'category' => $category,
            'producer' => $producer,
        ]);
    }
    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id_pd);

        // Xác thực các trường từ yêu cầu
        $validatedData = $request->validate([
            'catid' => 'required|integer',
            'name' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Quy tắc xác thực ảnh
            'sortDesc' => 'nullable|string',
            'detail' => 'nullable|string',
            'producer' => 'nullable|string|max:255',
            'number' => 'required|integer',
            'number_buy' => 'nullable|integer',
            'sale' => 'nullable|numeric|min:0|max:100',
            'price' => 'required|numeric',
            'price_sale' => 'nullable|numeric',
            'created' => 'nullable|date',
            'created_by' => 'nullable|integer',
            'modified' => 'nullable|date',
            'modified_by' => 'nullable|integer',
            'trash' => 'nullable|boolean',
            'status' => 'nullable|boolean',
            'idcustomer' => 'nullable|integer',
        ]);

        // Xử lý file ảnh
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('Image_products'), $imageName);
            $validatedData['img'] = $imageName; // Lưu tên ảnh vào mảng dữ liệu đã xác thực
        }

        // Tạo sản phẩm mới
        $product->update($validatedData);

        // Redirect hoặc trả về response
        $product = Product::all();
        $success = "Update Successful";
        return redirect()->route('product.index')->with('success', 'Product Update successfully.');
    }
    public function details_product($id)
{
    $product = Product::with('images_Related')->find($id);

    return view('account.product.details', [
        'product' => $product,
    ]);
}

    public function destroy(Request $request)
    {
        // Tìm category bằng ID và xóa nó
        $product = Product::findOrFail($request->id_pd);
        $product->delete();

        // Lấy lại danh sách category và trả về view với thông báo thành công
        $product = Product::all();
        $success = "Delete Successful";
        // Thêm thông báo vào session
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
