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
        //get Lowkers
        $lowkers = Lowker::latest()->paginate(5);
        //render view with Lowkers
        return view('admin.lowker.index', compact('lowkers'));
    }
    public function create()
    {
        $lokasi = lokasi::all(); 
        $kerja = waktu_k::all();
        $lulusan = category::all();
        return view('admin.lowker.create', compact('lokasi', 'kerja', 'lulusan'));
    }
    public function store(Request $request)
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
            'telp'     => $request->telp,
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
