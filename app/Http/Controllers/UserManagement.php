<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagement extends Controller
{
    public function users(){
        return view('admin.users');
    }
}
