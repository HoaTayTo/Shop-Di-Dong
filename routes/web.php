<?php

use App\Http\Controllers\Account\CartController;
use App\Http\Controllers\Account\CustomersController;
use App\Http\Controllers\Account\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\account\ProductsController;
use App\Http\Controllers\Account\RegisterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Livewire\Admin\C;
use App\Livewire\Admin\Product;
use App\Livewire\Admin\ProductComponent;
use App\Models\Category;
use App\Models\Customer;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Amin\OrderController;
use App\Models\Order;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\ProducerController;
use App\Http\Controllers\admin\SliderController;
use App\Models\Images_related;
use App\Http\Controllers\admin\ImagesRelateController;
// Route::get('/',[ProductController::class,'index']);
Route::get('/detailsproduct/{id}', [ProductController::class, 'details_product']);
//Route::get('/admin',[ProductController::class,'index_admin']);
//Route::get('/admin',[ProductController:: class,'product']);

//show product account
Route::get('/product',[ProductsController::class,'index']);
Route::get('/',[ProductsController::class,'home'])->name('index');

//Tìm kiếm sản phẩm
Route::get('/search', [ProductsController::class, 'getSearch']);

// Phân trang sản phẩm
Route::get('pagination','account\ProductsController@paginationProducts');


// ----------------------------------XỬ LÝ PRODUCT-------------------------------------------------
// Hiển thị sán phẩm

Route::get('/admin',[HomeController::class,'home'])->name('home.index');
Route::get('/showProduct',[ProductController::class,'index'])->name('product.index');
//SHOW CREATE PRODUCT
// nếu muốn hiển thị form khi click vào nút "create product" thì phải dùng thằng get. là nó lấy và trả về dữ liệu
Route::get('/showFromProduct',[ProductController::class, 'showFormAddProduct'])->name('product.showFormProduct');

// SUBMIT CREATE FORM PRODUCT
Route::post('/formCreateProduct',[ProductController::class, 'createSubmit'])->name('product.createSubmit');

//UPDATE PRODUCT
Route::get('/formUpdateProduct/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/updateProduct', [ProductController::class, 'update'])->name('product.update');

//DELETE PRODUCT
Route::delete('/deleteProduct', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/ascSortProduct', [ProductsController::class, 'filterProduct'])->name('product.Sort');

// -------------------------------------------XỬ LÝ CATEGORY----------------------------------------------
// SHOW CATEGORY
Route::get('/showCategory',[CategoryController::class,'index'])->name('category.showCategory');

Route::get('/showFormCategory', [CategoryController::class, 'showFormAddCategory'])->name('category.showFormCategory');

// CREATE CATEGORY
Route::post('/formCreateCategory',[CategoryController::class,'createCategory'])->name('category.createCategory');

//UPDATE CATEGORY
Route::post('/formUpdateCategory', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/updateCategory', [CategoryController::class, 'update'])->name('category.update');

//DELETE CATEGORY
Route::delete('/destroyCategory', [CategoryController::class, 'destroy'])->name('category.destroy');





//--------------------------------LOGIN_REGISTER----------------------------
Route::get('/login', [LoginController::class, 'index'])->name('user.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');

// ------------------------------REGISTER---------------------
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ---------------------------FORGET PASSWORD----------------------
Route::get('/forget-password',[LoginController::class,'forgetPass'])->name('customer.forgetPassWord');
Route::post('/forget-password',[LoginController::class,'postForgetPass']);
Route::get('/get-password',[LoginController::class,'getPass'])->name('customer.getPass');
Route::post('/get-password',[LoginController::class,'postForgetPass']);

Route::get('/forgetPW',[LoginController::class,'getForm'])->name('getForm');
Route::post('/sendMail',[LoginController::class,'sendMail'])->name('sendMail');

// -------------------------CART------------------------------
Route::get('/Cart/showCart',[CartController::class,'index'])->name('cart.showCart');
Route::post('/add-to-cart', [CartController::class,'addToCart'])->name('addToCart');
Route::delete('/deleteCart',[CartController::class,'deleteItemCart'])->name('cart.delete');

Route::post('/upDateQuantityAdd',[CartController::class,'UpDateCartAdd'])->name('cart.UpDateCartAdd');
Route::post('/upDateQuantityTru',[CartController::class,'UpDateCartTru'])->name('cart.UpDateCartTru');

//-------------------------------ORDER-------------------------------
Route::post('/addToOrder',[OrdersController::class,'addToOrder'])->name('order.addToOrder');
Route::get('/showOrder',[OrdersController::class,'index'])->name('order.index');
Route::put('/order/{id}/update-status', [OrdersController::class, 'updateStatus'])->name('update_status');
Route::get('/showCustomer', [CustomerController::class, 'index'])->name('customer.index');




Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/showFormCustomer', [CustomerController::class, 'showFormAddCustomer'])->name('customer.showFormCustomer');
Route::post('/formCreateCustomer', [CustomerController::class, 'createCustomer'])->name('customer.createCustomer');
// UPDATE CUSTOMER
Route::post('/formUpdateCustomer',[CustomerController::class,'edit'])->name('customer.formUpdateCustomer');
Route::post('/updateCustomer',[CustomerController::class,'update'])->name('customer.updateCustomer');





//DELETE CUSTOMER
Route::delete('/deleteCustomer',[CustomerController::class, 'destroy'])->name('customer.delete');

Route::get('/donhang',[OrdersController::class,'showOrderToCustomer'])->name('statusOrder');
// ----------------------------------STATUS ORDER-----------------------
Route::get('/state2',[OrdersController::class,'State2'])->name('status.State2');
Route::get('/state3',[OrdersController::class,'State3'])->name('status.State3');
Route::get('/state4',[OrdersController::class,'State4'])->name('status.State4');
Route::get('/state5',[OrdersController::class,'State5'])->name('status.State5');
Route::get('/state6',[OrdersController::class,'State6'])->name('status.State6');
Route::get('/state7',[OrdersController::class,'State7'])->name('status.State7');

// ---------------------------------THỐNG KÊ---------------------------------


// Route::get('banners', [BannerController::class, 'index'])->name('banners.index');
// Route::get('/create', [BannerController::class, 'create'])->name('banners.create');
// Route::post('banners', [BannerController::class, 'store'])->name('banners.store');
// Route::get('/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
// Route::put('/{id}', [BannerController::class, 'update'])->name('banners.update');
// Route::delete('/{id}', [BannerController::class, 'destroy'])->name('banners.destroy');

// ---------------------------PRODUCER-------------------
Route::get('/producer',[ProducerController::class,'home'])->name('producer.home');
Route::get('/showFormProducer', [ProducerController::class, 'showFormAddProducer'])->name('producer.showFormProducer');

// CREATE CATEGORY
Route::post('/formCreateProducer',[ProducerController::class,'createProducer'])->name('producer.createProducer');

//UPDATE CATEGORY
Route::post('/formUpdateProducer', [ProducerController::class, 'edit'])->name('producer.edit');
Route::post('/updateProducer', [ProducerController::class, 'update'])->name('producer.update');

//DELETE CATEGORY
Route::delete('/destroyProducer', [ProducerController::class, 'destroy'])->name('producer.destroy');



// --------------------------------------SLIDER--------------------------------------
Route::get('/slider',[SliderController::class,'index'])->name('slider.index');




Route::get('orders/{id}/edit', [OrdersController::class, 'editOrder'])->name('orders.edit');
Route::put('orders/{id}', [OrdersController::class, 'updateOrder'])->name('orders.update');


// ---------------------------LAPTOP-------------------------------------
Route::get('/laptop',[ProductsController::class,'indexLT'])->name('product.laptop');

