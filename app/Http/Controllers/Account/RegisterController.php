<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function index()
    {
        return view('account.Register.Register_Customer');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $customer = $this->create($request->all());

        return redirect()->route('user.login')->with('success', 'Đăng ký thành công!');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:db_customer'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255','unique:db_customer'],
        ]);
    }
    protected function create(array $data)
    {
        // Kiểm tra trùng lặp của email trước khi tạo mới
        $existingCustomer = Customer::where('email', $data['email'])->where('trash', 0)->first();
        if ($existingCustomer) {
            // Nếu email đã tồn tại, bạn có thể chọn xử lý theo ý muốn, ví dụ như hiển thị thông báo lỗi
            return redirect()->back()->withErrors(['email' => 'Email đã tồn tại'])->withInput();
        }

        // Nếu không có bản ghi nào trùng lặp, tiến hành tạo mới bản ghi
        return Customer::create([
            'fullname' => $data['fullname'],
            'username' => $data['username'],
            'password' => $data['password'], // Hash the password
            'address' => $data['address'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'created' => now(),
            'trash' => 0,
            'status' => 1,
            'token' => random_int(1111, 9999), // Corrected field name here
        ]);
    }
}
