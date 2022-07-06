@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Pengguna'}}
    @endsection
    @section('title')
        {{'Pengguna'}}
    @endsection

<!-- Content Row -->
<div class="row">
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="border-0 col-auto mr-2">
                        <i class="fa-solid fa-circle-user fa-3x"> </i>
                    </div>
                    <div class="border-0 col-auto mr-5">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0"> ADMIN </div>
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div> --}}
                    </div>
                    <div>
                        <a href=""><i class="fa-solid fa-pen-to-square fa-2x">edit</i></a><br>
                        <a href=""><i class="fa-solid fa-trash-can fa-2x">delete</i></a>
                    </div>
                </div>
            </div>
        </div>         
    </div>
</div>
    <div class="row">
        <div class="col-xl-4 col-md-7 mb-5">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class=" col-auto mr-2 mx-auto">
                            <a href=""><i class="fa-solid fa-plus fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>
    {{-- <div class="card-deck">
    <div class="card">
        <div class="border-0 col-auto mr-2">
            <i class="fa-solid fa-circle-user fa-3x"> </i>
        </div>
        <div class="card-body mr-5">
            <div class="h3 font-weight-bold text-primary text-uppercase mb-0"> ADMIN </div>
        </div>
        <div class="card-footer">
            <a href=""><i class="fa-solid fa-pen-to-square fa-2x">edit</i></a><br>
            <a href=""><i class="fa-solid fa-trash-can fa-2x">delete</i></a>
        </div>
      </div>
    </div> --}}
    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-body ">
            <div class="border-0 col-auto mr-2">
                <i class="fa-solid fa-circle-user fa-3x"> </i>
            </div>
            <div class="border-0 col-auto mr-5">
                <div class="h3 font-weight-bold text-primary text-uppercase mb-0"> ADMIN </div>
                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div> --}}
            </div>
        </div>
        <div class="card-footer bg-transparent border-success">
            <a href=""><i class="fa-solid fa-pen-to-square fa-2x">edit</i></a>
            <a href=""><i class="fa-solid fa-trash-can fa-2x">delete</i></a>
        </div>
      </div>
@endsection