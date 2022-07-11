<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
