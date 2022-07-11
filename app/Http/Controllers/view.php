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

    public function save(Request $request)
    {
        // $this->validate($request,[
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        User::create($request->all());
        return redirect()->route('/pengguna')
                        ->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
