<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    public function index()
    {
        return view('admin/admin');
    }

    public function login()
    {
        return view('admin/login');
    }
}
