<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        return view('Layouts.home.Tentang.tentang');
    }
}
