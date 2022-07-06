<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\tb_aset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TbAsetController extends Controller
{
    // public function tambah(Request $request){
    //     // $post   = tb_aset::all();
    //     // return view('index')->with('tb_aset', $post);
    //     if ($request->isMethod('post')) {
    //         $this->validate($request, [
    //             'no_sertifikat' => 'required|string|max:200|min:3',
    //         'alamat_aset' => 'required|string|max:200|min:3',
    //         'luas_aset' => 'required|string|max:200|min:3',
    //         'status_aset' => 'required|string|max:200|min:3',
    //         'kondisi_das' => 'required|string|max:200|min:3',
    //         'kondisi_geografis' => 'required|string|max:200|min:3',
    //         'asalusul_aset' => 'required|string|max:200|min:3',
    //         'th_kepemilikam' => 'required|string|max:200|min:3',
    //         'th_pembangunan' => 'required|string|max:200|min:3',
    //         'th_rehab' => 'required|string|max:200|min:3',
    //         'keterangan'  => 'required|string|max:200|min:3',
    //             // 'judul_buku' => 'required|string|max:200|min:3',
    //             // 'deskripsi_buku' => 'required|string|min:5',
    //             // 'tahun_terbit' => 'required|min:4|max:4',
    //             // 'stok_buku' => 'required|numeric',
    //             // 'gambar_buku' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024'
    //         ]);
    //         // $nama_gambar = time() . '_' . $request->file('gambar_buku')->getClientOriginalName();
    //         // $upload = $request->gambar_buku->storeAs('public/sampul_buku', $nama_gambar);
    //         // $path = Storage::url($upload);
    //         tb_aset::create([
    //             'no_sertifikat'=> $request->no_sertifikat,
    //         'alamat_aset' => $request->alamat_aset,
    //         'luas_aset' => $request->luas_ase,
    //         'status_aset' => $request->status_aset,
    //         'kondisi_das' => $request->kondisi_das,
    //         'kondisi_geografis' => $request->kondisi_geografis,
    //         'asalusul_aset' => $request->asalusul_aset,
    //         'th_kepemilikam' => $request->th_kepemilikam,
    //         'th_pembangunan' => $request->th_pembangunan,
    //         'th_rehab' => $request->th_rehab,
    //         'keterangan' => $request->keterangan
    //             // 'judul_buku' => $request->judul_buku,
    //             // 'deskripsi_buku' => $request->deskripsi_buku,
    //             // 'tahun_terbit' => $request->tahun_terbit,
    //             // 'stok_buku' => $request->stok_buku,
    //             // 'gambar_buku' => $path
    //         ]);
    //         return redirect('/tambah')->with('status', 'Data telah tersimpan di database');
 
    //     }
    //     return view('tambah');
    // }
    public function index()
    {
        $students = Student::latest()->paginate(5);
      
        return view('students.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('students.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
        ]);
      
        Student::create($request->all());
       
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }
  
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }
  
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
        ]);
      
        $student->update($request->all());
      
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
       
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }
}
