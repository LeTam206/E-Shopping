<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
class UserControler extends Controller
{
    public function allUsers(){
        $users = DB::select('SELECT id,name, email, created_at,phone,Age FROM users');
        return view('user.allUsers',['users' => $users]);
    }
//    public function showPageGuest()
//
//    {
//
//        if (!$this->userCan('view-guest')) {
//
//            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
//
//        }
//
//        return view("admin.guest");
//
//    }
//
//
//    public function showPageAdmin()
//
//    {
//
//        if (!$this->userCan('view-users')) {
//
//            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
//
//        }
//
//        return view("admin.users");
//
//    }
}
