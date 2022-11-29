<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index()
    {
        return view('Layouts.loker.loker');
    }
    public function detail()
    {
        return view('Layouts.loker.detail_loker');
    }
    public function lowongan()
    {
        return view('Layouts.home.Pasang_loker.lowongan');
    }
}
