<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatelulusanController extends Controller
{
    public function view_category()
    {
        $data= Category::all();
        return view('admin.cate_lulusan.category', compact('data'));
    }

    public function add_category(Request $request)
    {
       $data=new Category;
       $data->category_name=$request->category;

       $data->save();
       
       return back()->with('message', 'Category Added successfuly');
       
    }

    public function destroy($id)
    {
        $data = Category::where("id", $id)->first();
        $data->delete();
    
        return back()->with('message','Category Deleted Successfully');
    }
}
