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
        $this->validate($request, [
            'judul' => '',
            'deskripsi' => '',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("pasangloker");
        }

        pasangloker::create([
            'image'     => $data,
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

        if($request->file("image_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("pasangloker");
        } else {
            $data = $request->gambarLama;
        }

        pasangloker::where("id", $request->id)->update([
            'gambar' => $data,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return back();
     }

    public function destroy(pasangloker $pasangloker)
    {
        $pasangloker->delete();
       return back()->with('berhasil');
    }

}
