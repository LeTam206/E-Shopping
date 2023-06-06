<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    public function manufacture()
    {
        {
            return view('admin.manufacture');
        }
    }
    public function add_product()
    {
        return view('admin.add_product');
    }
    public function all_products()
    {
        return view('admin.all_products');
    }
}
