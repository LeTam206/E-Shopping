<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $check = (new AdminController)->check_login();
        if ($check == true){
            $allManu = Manufacturer::orderBy('created_at', 'desc')->get();
            return view('admin.manufacturer.index')->with('allManu', $allManu);
        }
        else {
            return view('errors.no_login');
        }        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $check = (new AdminController)->check_login();
        if ($check == true){
            return view('admin.manufacturer.add');
        }
        else {
            return view('errors.no_login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:20'
        ]);
        Manufacturer::create($request->all());
        return redirect()->route('manufacturer.index')->with('message', 'Thêm hãng sản xuất thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manu = Manufacturer::find($id);
        $allManu = Manufacturer::all();
        return view('admin.manufacturer.edit')->with('manu', $manu)->with('allManu', $allManu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $manu = Manufacturer::find($id);
        $manu->update($request->all());
        return redirect('admin/manufacturer')->with('message', 'Sửa hãng sản xuất thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Manufacturer::destroy($id);
        return redirect('admin/manufacturer')->with('message', 'Xóa hãng sản xuất thành công!');
    }
}
