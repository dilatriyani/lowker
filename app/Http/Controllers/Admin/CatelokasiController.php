<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatelokasiController extends Controller
{
    public function view_catelulusan()
    {
        $data= Lokasi::all();
        return view('admin.cate_lokasi.category', compact('data'));
    }

    public function add_catelulusan(Request $request)
    {
       $data=new Lokasi;
       $data->category_name=$request->category;

       $data->save();
       
       return back()->with('message', 'Category Added successfuly');
       
    }

    public function destroy($id)
    {
        $data = Lokasi::where("id", $id)->first();
        $data->delete();
    
        return back()->with('message','Category Deleted Successfully');
    }
}
