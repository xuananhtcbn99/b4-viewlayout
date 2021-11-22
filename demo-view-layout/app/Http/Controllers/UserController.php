<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        if (Auth::check()) {
            $users = $this->userRepository->getAll();
            return view('backend.user.list', compact('users'));
        }else return redirect()->route('admin.login');
    }
}
