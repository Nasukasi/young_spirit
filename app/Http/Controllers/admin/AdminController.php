<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');

    }
    public function login(Request $request){
//        echo $password = Hash::make('123456'); die;
        if($request->isMethod('post')){
            $data = $request->all();
        //    echo "<pre>"; print_r($data);
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])){
                return redirect('admin/dashboard');

            }
            else{
                return redirect()->back()->with('error message','Invalid Email or Password');
            }
        }
        return view('admin.login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
