<?php

namespace App\Http\Controllers;

use App\Models\aset;
use App\Models\Pemilik;
use App\Models\pemilik as ModelsPemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
    	// mengambil semua data pengguna
    	$pemilik = Pemilik::all();
    	// return data ke view
    	return view('pemilik', ['pemilik' => $pemilik]);
    }

    public function create(){
        $aset = aset::all();
        $pemilik = Pemilik::all();
        return view('pemilik', compact('aset', 'pemilik'));
    }

    public function store(Request $request)
    {
        $pemilik = new Pemilik();
        // $pemilik -> id = $request -> id;
        $pemilik -> nama = $request -> nama;
        $pemilik -> keterangan = $request -> keterangan;
        $pemilik -> aset_id = $request -> aset_id;

        $pemilik ->save();
        return redirect('/');
    }
}
