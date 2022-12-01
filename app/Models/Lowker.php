<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowker extends Model
{
    use HasFactory;
    protected $guarded = [''];
    // protected $fillable = [
    //     'image',
    //     'perusahaan',
    //     'email',
    //     'posisi_loker',
    //     'alamat',
    //     'kota',
    //     'lulusan',
    //     'waktu_k',
    //     'telp',
    //     'deskripsi',
    // ];

    public function kota()
    {

        return $this->belongsTo(Lokasi::class, "kota");
    }
    public function lulusan()
    {

        return $this->belongsTo(Category::class,"lulusan");
    }
    public function waktu_k()
    {

        return $this->belongsTo(Waktu_K::class,"waktu_k");
    }
}
