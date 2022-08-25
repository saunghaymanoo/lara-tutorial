<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Auth\LoginUserRequest;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function index()
    {
        if (Auth::guard('Administrator')->check()) {
            $role = Auth::guard('Administrator')->user()->role;
            if ($role == 1) {
                return redirect('admin/home');
            } elseif ($role == 2) {
                return redirect('manager/home');
            }
        }
        return redirect('login');
    }
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
    public function getLoginForm()
    {
        if (Auth::guard('Administrator')->check()) {
            $role = Auth::guard('Administrator')->user()->role;
            if ($role == 1) {
                return redirect('admin/home');
            } elseif ($role == 2) {
                return redirect('manager/home');
            }
        }
        return view('auth.login');
    }
    public function getPostLogin(LoginUserRequest $request) //Using Infrastructure Request
    {
        $validated = $request->validated();
        $validation = Auth::guard('Administrator')->attempt([
            'name'=>$request->username,
            'password'=>$request->password,
        ]);
        if ($validation) {
            $role   = Auth::guard('Administrator')->user()->role;
            if ($role ==  1) {
                return redirect('admin/home');
            } elseif ($role == 2) {
                return redirect('manager/home');
            } else {
                return redirect('login');
            }
        } else {
            return Redirect::back()->withErrors(['msg' => 'Wrong Credential'])->withInput();
        }
    }
}
