<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPekerjaController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "user" => User::where("id_role", 2)->paginate(5)
        ];

        return view('admin.Data_User.data_user', $data);
    }
}
