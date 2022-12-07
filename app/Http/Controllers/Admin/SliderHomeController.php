<?php

namespace App\Http\Controllers\admin;

use App\Models\slider_home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderHomeController extends Controller
{
    public function index()
    {
        $data = [
            "data_sliderhome" => slider_home::get()
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

        slider_home::create([
            'judul' => $request->judul,
            'heading' => $request->heading,
            'deskripsi' =>$request->deskripsi,
        ]);
        return back()->with('berhasil', 'Data baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => slider_home::where("id", $request->id)->first()
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

        slider_home::where("id", $request->id)->update([
            'judul' => $request->judul,
            'heading' => $request->heading,
            'deskripsi' => $request->deskripsi,

        ]);

        return back();
    }
    public function destroy(slider_home $slider_home)
    {
        //delete image

        //delete post
        $slider_home->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}

