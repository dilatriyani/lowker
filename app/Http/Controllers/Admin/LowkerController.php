<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lokasi;
use App\Models\Lowker;
use App\Models\Waktu_K;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LowkerController extends Controller
{
    public function index()
    {
        //get Lowkers
        $lowkers = [
           "Lowker" => Lowker::get(),
           "categories" => Category::all(),
           "waktu__k_s" => Waktu_K::all(),
           "lokasis" => Lokasi::all()

        ];
        //render view with Lowkers
        return view('admin.lowker.index', $lowkers );
    }
    public function create()
    {
        // $lokasi =  DB::table('lokasis')->get(); 
        // $waktu_k = DB::table('waktu__k_s')->get();
        // $category = DB::table('categories')->get();
        // return view('admin.lowker.create', compact('lokasi', 'waktu_k', 'category'));
        return view('admin.lowker.create');
    }
    public function store(Request $request)
    {
        //validate form
        // echo $request->image;
        // echo $request->perusahaan;
        // echo $request->posisi_loker;
        // echo $request->email;
        // echo $request->alamat;
        // echo $request->kota;
        // echo $request->lulusan;
        // echo $request->waktu_k;
        // echo $request->telp;
        // echo $request->deskripsi;

        // die();

        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,sjpg,gif,svg|max:2048',
            'perusahaan'     => 'required',
            'posisi_loker'     => 'required',
            'email'     => 'required',
            'alamat'     => 'required',
            'kota'     => 'required',
            'lulusan'     => 'required',
            'waktu_k'     => 'required',
            'telp'     => 'required|max:13|min:9',
            'deskripsi'     => 'required',
            
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/lowker', $image->hashName());

        //create Lowker
        Lowker::create([
            'image'     => $image->hashName(),
            'perusahaan'     => $request->perusahaan,
            'posisi_loker'     => $request->posisi_loker,
            'email'     => $request->email,
            'alamat'     => $request->alamat,
            'kota'     => $request->kota,
            'lulusan'     => $request->lulusan,
            'waktu_k'     => $request->waktu_k,
            'telp'     =>  $request->telp,
            'deskripsi'     => $request->deskripsi,
            
        ]);

        //redirect to index
        return redirect()->route('lowker.index')->with(['success' => 'Data Berhasil Tambah!']);
    }

    public function edit(Lowker $post)
    {
        return view('admin.lowker.edit', compact('post'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $Lowker
     * @return void
     */
    public function update(Request $request, Lowker $post)
    {
        //validate form
            $this->validate($request, [
                'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'perusahaan'     => 'required',
                'posisi_loker'     => 'required',
                'email'     => 'required',
                'alamat'     => 'required',
                'kota'     => 'required',
                'lulusan'     => 'required',
                'waktu_k'     => 'required',
                'telp'     => 'required|max:13|min:9',
                'deskripsi'     => 'required',
                
            ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/lowker/', $image->hashName());

            //delete old image
            Storage::delete('public/lowker/'.$post->image);

            //update Lowker with new image
            $post->update([
                'image'     => $image->hashName(),
                'perusahaan'     => $request->perusahaan,
                'posisi_loker'     => $request->posisi_loker,
                'email'     => $request->email,
                'alamat'     => $request->alamat,
                'kota'     => $request->kota,
                'lulusan'     => $request->lulusan,
                'waktu_k'     => $request->waktu_k,
                'telp'     => $request->telp,
                'deskripsi'     => $request->deskripsi,    
            ]);

        } else {

            //update Lowker without image
            $post->update([
                'perusahaan'     => $request->perusahaan,
                'posisi_loker'     => $request->posisi_loker,
                'email'     => $request->email,
                'alamat'     => $request->alamat,
                'kota'     => $request->kota,
                'lulusan'     => $request->lulusan,
                'waktu_k'     => $request->waktu_k,
                'telp'     => $request->telp,
                'deskripsi'     => $request->deskripsi,
                
            ]);
        }

        //redirect to index
        return redirect()->route('lowker.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(Lowker $post)
    {
        //delete image
        Storage::delete('public/lowker/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('lowker.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}
