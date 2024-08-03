<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Config_products;
use Illuminate\Cache\RateLimiting\Limit;
class ProductsController extends Controller
{
    public function index()
    {
        // Lọc các sản phẩm không phải là laptop với phân trang
        $product = Product::with('config_Products')
            ->where('catid', '!=', '12') // Lọc sản phẩm không phải là laptop
            ->paginate(10);

        // Đếm tổng số lượng sản phẩm không phải là laptop
        $productCount = Product::where('catid', '!=', '12')->count();

          // Lấy 5 sản phẩm đầu tiên
          $products1 = Product::skip(3)->take(5)->get();
          // $products1 = Product::take(2)->where('catid',12)
          // ->get();
          // Lấy 5 sản phẩm tiếp theo, bắt đầu từ sản phẩm thứ 6
          $products2 = Product::skip(9)->take(5)->get();

          // Lấy 5 sản phẩm tiếp theo, bắt đầu từ sản phẩm thứ 11
          $products3 = Product::skip(15)->take(5)->get();
          // Hiển thị 4 sản phẩm đi kèm
          $category_trend = Category::take(10)->get();

        // Trả về view với dữ liệu sản phẩm
        return view('account.product.product', [
            'product' => $product,
            'products1' => $products1,
            'products2' => $products2,
            'products3' => $products3,
            'category_trend' => $category_trend,
            'productCount' => $productCount
        ]);
    }
    public function indexLT()
    {
        $product = Product::where('catid', '=', '12') // Lọc sản phẩm  phải là laptop
            ->paginate(10);
        return view('account.product.indexLaptop',[
            'product'=>$product
        ]);
    }
    public function getSearch(Request $req)
    {
        $product = Product::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('price', $req->key)
            ->get();
        $productCount = $product->count();
        return view('account.product.search', [
            'product' => $product, 'productCount' => $productCount
        ]);
    }
    public function home()
    {
        $product = Product::paginate(10);
        // Đếm số lượng sản phẩm
        $productCount = $product->count();

        // Lấy 5 sản phẩm đầu tiên
        $products1 = Product::skip(3)->take(5)->get();
        // $products1 = Product::take(2)->where('catid',12)
        // ->get();
        // Lấy 5 sản phẩm tiếp theo, bắt đầu từ sản phẩm thứ 6
        $products2 = Product::skip(9)->take(5)->get();

        // Lấy 5 sản phẩm tiếp theo, bắt đầu từ sản phẩm thứ 11
        $products3 = Product::skip(15)->take(5)->get();
        // Hiển thị 4 sản phẩm đi kèm
        $category_trend = Category::take(10)->get();

        $laptop = Product::where('catid', '=', '12')->get();

        // Trả về view với dữ liệu sản phẩm
        $config = Config_products::all();
        return view('account.product.home', [
            'product' => $product,
            'products1' => $products1,
            'products2' => $products2,
            'products3' => $products3,
            'category_trend' => $category_trend,
            'productCount' => $productCount,
            'config' => $config,
            'laptop'=>$laptop,
        ]);
    }
    public function filterProduct(Request $req)
    {
        $query = Product::query();

        // Apply appropriate filter
        if ($req->has('discount')) {
            $query->where('sale', '>', 0);
        } elseif ($req->has('asc')) {
            $query->orderByRaw('(price * (1 - sale / 100)) asc');
        } elseif ($req->has('desc')) {
            $query->orderByRaw('(price * (1 - sale / 100)) desc');
        }

        $product = $query->paginate(10)->appends($req->query());
        $productCount = Product::count();

        return view('account.product.sort', [
            'product' => $product,
            'productCount' => $productCount,
            'request' => $req,
        ]);
    }
}
