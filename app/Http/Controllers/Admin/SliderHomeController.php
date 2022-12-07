<?php

namespace App\Http\Controllers\admin;

use App\Models\SliderHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderHomeController extends Controller
{
    public function index()
    {
        $data = [
            "data_sliderhome" => SliderHome::get()
        ];

        return view("admin.Home.slider_home.index", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'deskripsi' => '',
            'heading' => ''
        ]);

        SliderHome::create([
            'judul' => $request->judul,
            'heading' => $request->heading,
            'deskripsi' =>$request->deskripsi,
        ]);
        return back()->with('berhasil', 'Data baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SliderHome::where("id", $request->id)->first()
        ];

        return view("admin.Home.slider_home.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'deskripsi' => '',
            'heading' => ''
        ]);

        Sliderhome::where("id", $request->id)->update([
            'judul' => $request->judul,
            'heading' => $request->heading,
            'deskripsi' => $request->deskripsi,

        ]);

        return back();
    }
    public function destroy(SliderHome $slider_home)
    {
        //delete image

        //delete post
        $slider_home->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}


