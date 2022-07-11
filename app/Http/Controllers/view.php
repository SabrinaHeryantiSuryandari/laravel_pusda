<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class view extends Controller
{
    public function index()
    {
        return view('index/admin');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function pengguna()
    {
        // $data=User::all();
        // return view('admin/pengguna',$data);
        $data=DB::table('users')->get();
        return view('admin/pengguna',compact('data'));
        // dd($data);
    }
}
