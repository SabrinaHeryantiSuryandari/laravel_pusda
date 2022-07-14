<?php

namespace App\Http\Controllers;

use App\Models\aset;
use App\Models\Pemilik;
use App\Models\pemilik as ModelsPemilik;
use Illuminate\Http\Request;

use App\Http\Controllers\AsetController;

class PemilikController extends Controller
{
    public function index()
    {
    	// mengambil semua data pengguna
    	// $pemilik = Pemilik::all();
        $asets = aset::all();
        $pemilik = Pemilik::with('aset')->paginate(2);
    	// return data ke view
    	return view('pemilik', 
        // ['pemilik' => $pemilik]
        compact('pemilik')
    );

    }

    public function create(){
        $asets = aset::all();
        // $pemilik = Pemilik::all();
        // return view('pemilik', compact('asets', 'pemilik'));
        return view('pemilik', compact('asets'));
        
    }

    public function store(Request $request)
    {
        $pemilik = new Pemilik();
        // $pemilik -> id = $request -> id;
        $pemilik -> nama = $request -> nama;
        $pemilik -> keterangan = $request -> keterangan;
        // $pemilik -> aset_id = $request -> aset_id;
        // $pemilik -> aset_id = AsetController::class, id;;
        $pemilik -> no_sertifikat = $request -> no_sertifikat;
        $pemilik -> nama_aset = $request -> nama_aset;
        $pemilik -> alamat_aset = $request -> alamat_aset;
        $pemilik -> luas_aset = $request -> luas_aset;
        $pemilik -> status_aset = $request -> status_aset;
        $pemilik -> kondisi_aset = $request -> kondisi_aset;
        $pemilik -> kondisi_geografis = $request -> kondisi_geografis;
        $pemilik -> asalusul_aset = $request -> asalusul_aset;
        $pemilik -> th_kepemilikan = $request -> th_kepemilikan;
        $pemilik -> th_pembangunan = $request -> th_pembangunan;
        $pemilik -> th_rehab = $request -> th_rehab;
        $pemilik -> keterangan_aset = $request -> keterangan_aset;

        // $pesmilik ->save();
        $asets = Aset::create($request->except(['aset_id', 'nama', 'keterangan']));
        $pemilik = Pemilik::create(['aset_id' => $asets->id, $request->only(['aset_id', 'nama', 'keterangan'])]);

        // return redirect('/');
        return back()->with('success',' Post baru berhasil dibuat.');
    }
}
