<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowker extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'perusahaan',
        'email',
        'posisi_loker',
        'alamat',
        'kota',
        'lulusan',
        'waktu_k',
        'telp',
        'deskripsi',
    ];

    public function Lowker()
    {

        return $this->hasMany(Lowker::class);
    }
}
