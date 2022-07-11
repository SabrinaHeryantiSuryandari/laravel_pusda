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
{{-- <<<<<<< HEAD --}}

{{-- <<<<<<< HEAD --}}
{{-- <form action="" method="POST" enctype="multipart/form-data"> --}}
          
  {{-- //untuk aman agar tidak di hack --}}
    @csrf 
  {{-- ======= --}}
  {{-- <form action=""> --}}
  {{-- ======= --}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
  {{-- </form> --}}
{{-- @if (Route::has('register')) --}}
  <div class="card-header">{{ __('Register') }}</div>
  {{-- <form action="/save" method="POST" enctype="multipart/form-data"> --}}
  {{-- <form action="{{ route('regis.create') }}" method="POST" enctype="multipart/form-data"> --}}
  <form action="{{ route('regis.create') }}" method="POST" enctype="multipart/form-data">
                          
      @csrf
      {{-- Nama --}}
      {{-- <div class="form-group">
          <label class="font-weight-bold">Nama</label>
          <input type="text" class="form-control" name="name">
      </div> --}}
      {{-- <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div> --}}
      <div class="row mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
        <div class="col-md-6">
          <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">
            <br>
          
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
      
      {{-- Email --}}
      {{-- <div class="form-group">
          <label class="font-weight-bold">Email</label>
          <input type="text" class="form-control" name="email">
      </div> --}}
      {{-- <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div> --}}
      <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">
          <input type="text" name="email" value="{{ old('email') }}" placeholder="email">
            <br>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>

      {{-- Password --}}
      {{-- <div class="form-group">
          <label class="font-weight-bold">Password</label>
          <input type="password" class="form-control" name="password">
      </div> --}}
      {{-- <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div> --}}
      <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-6">
          <input type="text" name="password" value="{{ old('password') }}" placeholder="password">
            <br>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>

      {{-- Confirm Password --}}
      <div class="row mb-3">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
      </div>

      <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{-- {{ __('Register') }} --}}
                Register
            </button>
        </div>
    </div>

      {{-- <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
      <button type="reset" class="btn btn-md btn-warning">RESET</button> --}}
  </form>
{{-- </form>  --}}
{{-- @endif --}}

@endsection