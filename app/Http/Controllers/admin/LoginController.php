<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.Login_Logout.login');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $checkEmail = Customer::where('email', $email)->first();

        if ($checkEmail) {
            if ($password == $checkEmail->password) {
                session()->put("UserID", $checkEmail->id);
                session()->put("UserName", $checkEmail->username);
                session()->put("Phone", $checkEmail->phone);
                session()->put("Address", $checkEmail->address);
                session()->put("Email", $checkEmail->email);

                return redirect()->route('index');
            } else {
                return redirect()->back()->with('error', 'Password not confirm!');
            }
        } else {
            return redirect()->back()->with('error', 'Email already!');
        }
        return view();
    }
    public function logout(Request $request)
    {
        $request->session()->forget('UserID');
        $request->session()->forget('UserName');
        return redirect()->route('index');
    }
    public function getForm()
    {
        return view('admin.Login_Logout.forgetPass');
    }
    public function sendMail(Request $request)
    {
        $email = $request->input('email');
        $checkEmail = Customer::where('email', $email)->first();
        if ($checkEmail) {
            $passWord = random_int(111111, 999999);
            $checkEmail->password = $passWord; // Mã hóa mật khẩu trước khi lưu
            $checkEmail->save();
            session()->put("pass", $checkEmail->password);
            $data = ['password' => $passWord]; // Đảm bảo rằng dữ liệu này là một mảng

            Mail::send('admin.Login_Logout.PassWord', $data, function ($message) use ($email) {
                $message->from('walegbenga807@gmail.com', 'Coa Blog');
                $message->to($email)->subject('Mật khẩu mới của bạn');
            });

            return response()->json(['message' => 'Email đã được gửi thành công']);
        }

        return response()->json(['message' => 'Email không tìm thấy'], 404);
    }
}
