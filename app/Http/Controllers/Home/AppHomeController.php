<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppHomeController extends Controller
{
    public function index()
    {
        return view('pekerja.Layouts.home.form_iklan');
    }

    public function tentang()
    {
        return view('pekerja.Layouts.home.tentang');
    }

    public function kebijakan()
    {
        return view('pekerja.Layouts.home.kebijakan');
    }

    public function pasanglowongan()
    {
        return view('pekerja.Layouts.home.pasanglowongan');
    }

    public function kontak()
    {
        return view('pekerja.Layouts.home.kontak');
    }
}
