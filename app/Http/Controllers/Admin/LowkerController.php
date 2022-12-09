<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lokasi;
use App\Models\Lowker;
use App\Models\Waktu_K;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LowkerController extends Controller
{
    public function index()
    {
        $data = [
            "lowker" => Lowker::get(),
            "kategori" => Category::all(),
            "waktu_kerja" => Waktu_K::all(),
            "lokasi" => Lokasi::all(),
        ];

        return view("admin.lowker.index", $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'image'     => 'mimes:jpg,jpeg,png',
            'perusahaan'  => '',
            'posisi_loker' => '',
            'email' => '',
            'alamat' => '',
            'gaji' => '',
            'jenis_lokasi' => '',
            'jenis_category' => '',
            'jenis_waktukerja' => '',
            'telp'=> '',
            'deskripsi' =>'',
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("lowker");
        }

        Lowker::create([
            'image' => $data,
            'perusahaan' => $request->perusahaan,
            'posisi_loker' => $request->posisi_loker,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'gaji' => $request->gaji,
            'jenis_lokasi' => $request->jenis_lokasi,
            'jenis_category' => $request->jenis_category,
            'jenis_waktukerja' => $request->jenis_waktukerja,
            'telp' =>  $request->telp,
            'deskripsi' => $request->deskripsi,
        ]);

        return back()->with('success', 'Data Berhasil Tambah!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Lowker::where("id", $request->id)->first(),
            "kategori" => Category::all(),
            "waktu_kerja" => Waktu_K::all(),
            "lokasi" => Lokasi::all()
        ];
        return view('admin.lowker.edit', $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image'     => 'mimes:jpg,jpeg,png',
            'perusahaan'  => '',
            'posisi_loker' => '',
            'email' => '',
            'alamat' => '',
            'gaji' => '',
            'jenis_lokasi' => '',
            'jenis_category' => '',
            'jenis_waktukerja' => '',
            'telp'=> '',
            'deskripsi' =>'',
        ]);

        if($request->file("image_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("lowker");
        } else {
            $data = $request->gambarLama;
        }

        Lowker::where("id", $request->id)->update([
            'image' => $data,
            'perusahaan' => $request->perusahaan,
            'posisi_loker' => $request->posisi_loker,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'gaji' => $request->gaji,
            'jenis_lokasi' => $request->jenis_lokasi,
            'jenis_category' => $request->jenis_category,
            'jenis_waktukerja' => $request->jenis_waktukerja,
            'telp' =>  $request->telp,
            'deskripsi' => $request->deskripsi,
        ]);

       return back();
    }

    public function destroy($id)
    {
        $data = Lowker::where("id", $id)->first();
        $data->delete();

        return back()->with('message','Category Deleted Successfully');
    }


}
