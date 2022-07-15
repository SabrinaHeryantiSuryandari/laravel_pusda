@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Laporan Data'}}
    @endsection
    @section('title')
        {{'Laporan Data'}}
    @endsection

<!-- Content Row -->
    <div class="card shadow mb-3 ">
        <div class="card-header py-2 "style="background-color: #40B9CB;">
            <h6 class="m-0 font-weight-bold text-white text-center">Tabel Data Aset</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered" id="example" style="width:100%">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>No Sertifikat</th>
                        <th>Nama Aset</th>
                        <th>Alamat</th>
                        <th>Status Aset</th>
                        {{-- <th>Luas Aset</th> --}}
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
                        <td>{{ ++$i }}</td>
                        <td>{{ $aset->id}}</td>
                        <td>{{ $aset->no_sertifikat }}</td>
                        <td>{{ $aset->nama_aset }}</td>
                        <td>{{ $aset->alamat_aset }}</td>
                        <td>{{ $aset->status_aset }}</td>
                        {{-- <td>{{ $aset->luas_aset }}</td>
                        <td>{{ $aset->kondisi_aset }}</td>
                        <td>{{ $aset->kondisi_geografis }}</td>
                        <td>{{ $aset->asalusul_aset }}</td>
                        <td>{{ $aset->th_kepemilikam }}</td>
                        <td>{{ $aset->th_pembangunan }}</td>
                        <td>{{ $aset->th_rehab }}</td> --}}
                        <td>{{ $aset->keterangan_aset }}</td>
                        <td>
                            
                            <form action="{{ route('asets.destroy',$aset->id) }}" method="POST">
                                <a class="btn btn-info " href="{{ route('asets.show',$aset->id) }}">Detail</a>
                                <a class="btn btn-primary" href="{{ route('asets.edit',$aset->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                                
                                {{-- <a class="btn btn-primary" href="{{ route('asets.edit',$aset->id) }}">Edit Belum Terserifikasi</a> --}}
                                
                                
                            </form>
                            {{-- <form action="{{ route('pemilik.destroy',$aset->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('pemilik.edit',$aset->id) }}">Edit Tersertifikasi</a>

                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
