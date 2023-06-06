<?php

namespace App\Http\Controllers;

use App\Admin;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
        
    }

    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message','Mật Khẩu tài khoản không đúng');
            return Redirect::to('/admin');
        }


    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }

    public function check_login(){
        $admin_id = Session::get('admin_id');
        if(isset($admin_id)){
            return true;
        }else{
            return false;
        }
    }

    public function showProfile()
    {
        if (AdminController::check_login()){
            $admin_id = Session::get('admin_id');
            //$info_admin = AdminController::where('id', '=', $admin_id)->get();
            $info_admin = DB::table('tbl_admin')->where('admin_id', '=', $admin_id)->get();
            return view('admin.profile')->with('info_admin', $info_admin);
            //dd($info_admin);
        }
        else{
            return view('errors.no_login');
        }
    }
}


