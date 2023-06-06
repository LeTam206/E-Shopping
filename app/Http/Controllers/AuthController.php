<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function register_auth(){
        return view('admin.custom_auth.register');
    }
    public function login_auth(){
        return view('admin.custom_auth.login_auth');
    }
    public function login(Request $request){
        return $this->validate($request,[
            'admin_email' => 'required|max:255',
            'admin_password' => 'required|max:255',
        ]);
//        $data = $request->all();
        if(Auth::attempt(['admin_email' => $request->admin_email,'admin_password' => $request->admin_password])){
            return \redirect('/dashboard');
        }
        else{
            return  \redirect('/login_auth')->with('message','Opps, sai roi');
        }
    }
    public function register(Request $request){
        $this->validation($request);
        $data = $request->all();

        $admin = new Admin();
        $admin-> admin_name = $data['admin_name'];
        $admin-> admin_phone = $data['admin_phone'];
        $admin-> admin_email = $data['admin_email'];
        $admin-> admin_password = md5($data['admin_password']);
        $admin->save();
        return \redirect('/register-auth')->with('messsage','Đăng Ký thành Công');
    }
    public function validation($request){
        return $this->validate($request,[
            'admin_name' => 'required|max:255',
            'admin_phone' => 'required|max:255',
            'admin_email' => 'required|max:255',
            'admin_password' => 'required|max:255',
        ]);
    }
    public function all_users()
    {
        return view('admin.users.all_users');
    }
    public function add_user(){
        return view('admin.users.add_user');
    }
}
