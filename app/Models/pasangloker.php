<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasangloker extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'image',
    ];
}
