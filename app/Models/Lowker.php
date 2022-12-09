<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowker extends Model
{
    use HasFactory;

    protected $table = "lowkers";

    protected $guarded = [''];

    public function getkota()
    {

        return $this->belongsTo("App\Models\Lokasi", "jenis_lokasi", "id");
    }
    public function getpendidikan()
    {

        return $this->belongsTo("App\Models\Category", "jenis_category", "id");
    }
    public function getwaktu_k()
    {

        return $this->belongsTo("App\Models\Waktu_K", "jenis_waktukerja", "id");
    }
}
