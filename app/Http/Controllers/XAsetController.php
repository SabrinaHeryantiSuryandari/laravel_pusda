<?php

namespace App\Http\Controllers;

use App\Models\aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index()
    {
        $asets = Aset::latest()->paginate(5);
      
        return view('asets.index',compact('asets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            // 'kelas' => 'required',
            'no_sertifikat' => 'required',
            'alamat_aset' => 'required',
            'luas_aset' => 'required',
            'status_aset' => 'required',
            'kondisi_das' => 'required',
            'kondisi_geografis' => 'required',
            'asalusul_aset' => 'required',
            'th_kepemilikam' => 'required',
            'th_pembangunan' => 'required',
            'th_rehab' => 'required',
            'keterangan' => 'required'
        ]);
      
        Aset::create($request->all());
       
        return redirect()->route('asets.index')
                        ->with('success','Aset created successfully.');
    }
  
    public function show(Aset $aset)
    {
        return view('asets.show',compact('aset'));
    }
  
    public function edit(Aset $aset)
    {
        return view('asets.edit',compact('aset'));
    }

    public function update(Request $request, Aset $aset)
    {
        $request->validate([
            'no_sertifikat' => 'required',
            'alamat_aset' => 'required',
            'luas_aset' => 'required',
            'status_aset' => 'required',
            'kondisi_das' => 'required',
            'kondisi_geografis' => 'required',
            'asalusul_aset' => 'required',
            'th_kepemilikam' => 'required',
            'th_pembangunan' => 'required',
            'th_rehab' => 'required',
            'keterangan' => 'required'
        ]);
      
        $aset->update($request->all());
      
        return redirect()->route('asets.index')
                        ->with('success','Aset updated successfully');
    }

    public function destroy(Aset $aset)
    {
        $aset->delete();
       
        return redirect()->route('asets.index')
                        ->with('success','Aset deleted successfully');
    }
}
