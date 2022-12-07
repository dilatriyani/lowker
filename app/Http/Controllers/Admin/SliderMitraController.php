<?php

namespace App\Http\Controllers\admin;

use App\Models\slider_mitra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderMitraController extends Controller
{
    public function index()
    {
        $data = [
            "data_slidermitra" => slider_mitra::get()
        ];

        return view("admin.Home.slider_mitra.index", $data);
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);
              //upload image
        $image = $request->file('image');
        $image->storeAs('public/lowker', $image->hashName());
        // if($request->file("image")) {
        //     $data = $request->file("image")->store("sliderhome");
        // }

        slider_mitra::create([
            'image'     => $image->hashName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return back()->with('berhasil', 'Data baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => slider_mitra::where("id", $request->id)->first()
        ];

        return view("admin.Home.slider_mitra.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'deskripsi' => '',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/lowker/', $image->hashName());

            //delete old image
            Storage::delete('public/lowker/'. $data->image);
        }else{

        slider_mitra::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,

        ]);
    }

        return back();

      }

    public function destroy(slider_mitra $slider_mitra)
    {
        //delete image
        Storage::delete('public/lowker/'. $slider_mitra->image);

        //delete post
        $slider_mitra->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }

}
