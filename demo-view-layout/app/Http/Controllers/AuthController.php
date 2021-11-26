<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
//    protected $authRepository;
//
//    public function __construct(AuthRepository $authRepository)
//    {
//        $this->authRepository= $authRepository;
//    }

    public function validationEmail(Request $request)
    {
        // Lấy dữ liệu Email từ URL
        $email = $request->email;
        $isEmail = true;
        // Kiểm tra validate email theo hàm mặc định thư viện PHP
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isEmail = false;
        }

        return view('backend.user.list', compact('isEmail'));

    }
    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
//            dd("Login successful");
            return redirect()->route('users.index');
        } else {
            dd("Login failed");
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function showFormRegister()
    {
        return view('backend.auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->only('name','role_id', 'email', 'password');
        $data['password'] = Hash::make($request->password);
        $user = User::query()->create($data);
//        dd($user);
        return redirect()->route('admin.login');
    }
}
