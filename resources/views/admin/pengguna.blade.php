@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Halaman '}}
    @endsection
    @section('title')
        {{'Pengguna'}}
    @endsection

{{ $data }}

{{-- <form action="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}

<form action="">
                        
    @csrf

    <div class="form-group">
        <label class="font-weight-bold">Nama</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label class="font-weight-bold">Email</label>
        <input type="text" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label class="font-weight-bold">Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>

</form> 

@endsection