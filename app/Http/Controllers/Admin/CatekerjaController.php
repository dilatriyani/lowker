<?php

namespace App\Http\Controllers\Admin;

use App\Models\Waktu_K;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatekerjaController extends Controller
{
    public function view_catekerja()
    {
        $data= Waktu_K::all();
        return view('admin.cate_kerja.category', compact('data'));
    }

    public function add_catekerja(Request $request)
    {
       $data=new Waktu_K;
       $data->category_name=$request->category;

       $data->save();
       
       return back()->with('message', 'Category Added successfuly');
       
    }

    public function destroy($id)
    {
        $data = Waktu_K::where("id", $id)->first();
        $data->delete();
    
        return back()->with('message','Category Deleted Successfully');
    }
}
