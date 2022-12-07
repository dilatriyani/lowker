<?php

namespace App\Http\Controllers\admin;

use App\Models\Kebijakan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KebijakanUserController extends Controller
{
    public function index()
    {
        $data = [
            "data_kebijakan" => Kebijakan::get()
        ];

        return view("admin.Home.kebijakanuser.index", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'heading' => '',
            'deskripsi' => '',
           
        ]);
        Kebijakan::create([
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

        return view("admin.Home.kebijakan.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
             'heading' => '',
            'deskripsi' => '',
            
        ]);

       

        Sliderhome::where("id", $request->id)->update([
            'judul' => $request->judul,
            'heading' => $request->heading,
            'deskripsi' => $request->deskripsi,
            
        ]);

        return back();
    }
    public function destroy(Kebijakan $kebijakanuser)
    {

        //delete post
        $kebijakanuser->delete();
        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}
