<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     public function index(){
//         $users = User::all();
//         return view('admin.pengguna',compact('users'))
//         ->with('i', (request()->input('page', 1) - 1) * 5);
    
//         // return view('index')->with('user', $users);
//     }
//     public function lihat(User $users)
//     {
//         // return view('admin.lihat',compact('user'));
//     }
// }

// <?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        // $admins   = User::all();
        // return view('admin/pengguna')->with('user', $admins);

        return view('admin.pengguna');
    }

     // public function index()
    // {
    //     $admins = User::latest()->paginate(5);
      
    //     return view('admin.pengguna',compact('admins'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.tambah');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
      
    //     User::create($request->all());
       
    //     return redirect()->route('pengguna')
    //                     ->with('success','Tambah admin successfully.');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    // {
    //     return view('admin.show',compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(User $user)
    // {
    //     return view('admin.editadmin',compact('user'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, User $user)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
      
    //     $user->update($request->all());
      
    //     return redirect()->route('pengguna')
    //                     ->with('success','Admin updated successfully');
    
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    // {
    //     $user->delete();
       
    //     return redirect()->route('users.index')
    //                     ->with('success','Admin deleted successfully');
    
    // }
}

