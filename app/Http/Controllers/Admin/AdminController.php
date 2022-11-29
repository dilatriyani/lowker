<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
// public function redirect()
// {
//     $user=Auth::user()->user;

//     if($user=='1')
//     {
//         return view('admin.home');
//     }
// }
}
