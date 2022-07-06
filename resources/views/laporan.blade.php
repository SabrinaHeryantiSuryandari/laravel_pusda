@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Laporan Data'}}
    @endsection
    @section('title')
        {{'Laporan Data'}}
    @endsection

<!-- Content Row -->
<div class="row container-fluid">
    {{-- <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laravel 9 CRUD School Application</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="create"> Create New student</a>
            </div>
        </div>
    </div> --}}
   
    <div class="card shadow mb-3 ">
        <div class="card-header py-2 ">
            <h6 class="m-0 font-weight-bold text-black text-center">Tabel Data Aset</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>No Sertifikat</th>
                        <th>Nama Aset</th>
                        <th>Alamat</th>
                        {{-- <th>Luas Aset</th> --}}
                        <th>Status Aset</th>
                        {{-- <th>Kondisi Aset</th>
                        <th>Kondisi Geografis</th>
                        <th>Asal Usul</th>
                        <th>Tahun Kepemilikan</th>
                        <th>Tahun Pembangunan</th>
                        <th>Tahun Rehab</th> --}}
                        <th>Keterangan</th>
                        <th width="280px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($asets as $aset)
                    <tr>
                        <td>{{ $aset->id }}</td>
                        <td>{{ $aset->no_sertifikat }}</td>
                        <td>{{ $aset->nama_aset }}</td>
                        <td>{{ $aset->alamat_aset }}</td>
                        {{-- <td>{{ $aset->luas_aset }}</td> --}}
                        <td>{{ $aset->status_aset }}</td>
                        {{-- <td>{{ $aset->kondisi_aset }}</td>
                        <td>{{ $aset->kondisi_geografis }}</td>
                        <td>{{ $aset->asalusul_aset }}</td>
                        <td>{{ $aset->th_kepemilikam }}</td>
                        <td>{{ $aset->th_pembangunan }}</td>
                        <td>{{ $aset->th_rehab }}</td> --}}
                        <td>{{ $aset->keterangan }}</td>
                        <td>
                            <form action="{{ route('asets.destroy',$aset->id) }}" method="POST">
            
                                <a class="btn btn-info" href="{{ route('asets.show',$aset->id) }}">Detail</a>
                
                                <a class="btn btn-primary" href="{{ route('asets.edit',$aset->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            
    <div class="row text-center">
        {!! $asets->links() !!}
    </div>
</div>
        </div>
    </div>
</div>
@endsection