@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Halaman '}}
    @endsection
    @section('title')
        {{'Pengguna'}}
    @endsection

@foreach ($data as $view)
    {{ $view }}
@endforeach

@endsection