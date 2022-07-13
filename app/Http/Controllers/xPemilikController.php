<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
        $pemiliks = Pemilik::latest()->paginate(5);
      
        // return view('admin.laporan',compact('pemiliks'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.inputpemilik');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
      
        Pemilik::create($request->all());
       
        return redirect()->route('inputpemilik')
                        ->with('success','Aset created successfully.');
    }
}
