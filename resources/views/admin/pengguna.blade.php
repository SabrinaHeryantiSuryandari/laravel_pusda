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
    {{-- <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="border-0 col-auto mr-2">
                        <i class="fa-solid fa-circle-user fa-3x"> </i>
                    </div>
                    <div class="border-0 col-auto mr-5">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0"> ADMIN </div> --}}
                        {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div> --}}
                    {{-- </div>
                    <div class="border-0 col-auto mr-5">
                        <a href=""><i class="fa-solid fa-pen-to-square fa-2x">edit</i></a><br>
                        <a href=""><i class="fa-solid fa-trash-can fa-2x">delete</i></a>
                    </div>
                </div>
            </div>
        </div>         
    </div> --}}
</div>
    <div class="row row container-fluid">
        {{-- <div class="col-xl-4 col-md-7 mb-5">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class=" col-auto mr-2 mx-auto"> --}}
                             {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                       
                                        <i class="fa-solid fa-plus fa-3x"> {{ __('Register') }}</i>
                                    </a>
                                </li>
                            @endif --}}
                            {{-- <a href=""><i class="fa-solid fa-plus fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div> --}}
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
    {{-- <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-body ">
            <div class="border-0 col-auto mr-2">
                <i class="fa-solid fa-circle-user fa-3x"> </i>
            </div>
            <div class="border-0 col-auto mr-5">
                <div class="h3 font-weight-bold text-primary text-uppercase mb-0"> ADMIN </div> --}}
                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div> --}}
            {{-- </div>
        </div>
        <div class="card-footer bg-transparent border-success">
            <a href=""><i class="fa-solid fa-pen-to-square fa-2x">edit</i></a>
            <a href=""><i class="fa-solid fa-trash-can fa-2x">delete</i></a>
        </div>
    </div> --}}
    
    <div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Laravel 9 CRUD School Application</h2>
        </div>
        <div class="float-end">
            {{-- <a class="btn btn-success" href="{{ route('items.create') }}"> Create New item</a> --}}
        </div>
    </div>
</div> 

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

    {{-- <tr>
        <th>No</th>
        <th>Name</th>
        <th>Kelas</th>
        <th width="280px">Action</th>
    </tr> --}}
    <div class="col-12">
        <div class="row">
    @foreach ($data as $title)
    {{-- <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <form action="{{ route('user.destroy',$user->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr> --}}
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $title->name }}</h5>
                <p class="card-text">{{ substr($title->email, 0, 100) }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <br>
    </div>
    @endforeach
        </div></div>

{{-- <div class="row text-center">
    {!! $title->links() !!}
</div> --}}

<br>
{{-- <div class="container">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">     
                 <b> LaraPost</b>
            </a>
        </div>
    </nav>
    <br>
    <div class="col-12">
        <div class="row">
            @foreach ($user as $item)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ substr($item->email, 0, 100) }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}

</div>

@endsection