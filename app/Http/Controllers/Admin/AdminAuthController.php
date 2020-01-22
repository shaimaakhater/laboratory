<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(){

        return view('admin.login');

    }



    public function dologin(){
        $remeberme=request('remeberme')==1?true:false;
        $email=request('email');
            $password=request('password');
        if(Auth::guard('admin')->attempt(['email'=>$email,'password'=>$password],$remeberme)){
            return redirect('admin');
        }else{
            session()->flash('error',trans('admin.incorrect_info'));
            return view('admin.login');
        }

    }
    public function logout(){

        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
