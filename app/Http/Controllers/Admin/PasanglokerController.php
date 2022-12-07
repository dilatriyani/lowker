<?php

namespace App\Http\Controllers\admin;

use App\Models\pasangloker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PasanglokerController extends Controller
{
    public function index()
    {
        $data = [
            "pasangloker" => pasangloker::get()
        ];

        return view("admin.Home.pasangloker.index", $data);
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

        pasangloker::create([
            'image'     => $image->hashName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return back()->with('berhasil', 'Data baru telah ditambahkan!');
    }
    public function edit(Request $request)
    {
        $data = [
            "edit" => pasangloker::where("id", $request->id)->first()
        ];

        return view("admin.Home.pasangloker.edit", $data);
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
            Storage::delete('public/lowker/'.$data->image);
        }else{

            pasangloker::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,

        ]);
    }

        return back();

      }

    public function destroy(pasangloker $pasangloker)
    {
        //delete image
        Storage::delete('public/lowker/'. $pasangloker->image);

        //delete post
        $pasangloker->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }

}
