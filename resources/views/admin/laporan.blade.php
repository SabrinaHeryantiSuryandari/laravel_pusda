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
                {{-- <table class="table table-bordered" id="datatabels" width="100%" cellspacing="0"> --}}
                <table class="table table-bordered" id="example" style="width:100%">
                    <thead>
                    <tr>
                        <th>NO</th>
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
                        <td>{{ ++$i }}</td>
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
                        <td>{{ $aset->keterangan_aset }}</td>
                        <td>
                            <form action="{{ route('asets.destroy',$aset->id) }}" method="POST">
<<<<<<< HEAD

                                <a class="btn btn-info" href="{{ route('asets.show',$aset->id) }}">Detail</a>

{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>

=======
            
                                <a class="btn btn-info" href="{{ route('asets.show',$aset->id) }}">Detail</a>
                                {{-- <a data-toggle="modal" data-target="#exampleModal" class="btn btn-info" href="{{ route('asets.show',$aset->id) }}">Detail</a> --}}
                
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Detail
</button> --}}
  
>>>>>>> ec944f011c5060ac17cd5ed068b98fb09dc60838
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{-- @foreach ($asets as $aset) --}}
            <table class="" style="margin:20px auto;" id="dataTable" width="100%" cellspacing="0">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>No Sertifikat:</td>
                            <td>{{ $aset->no_sertifikat }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Nama Aset:</td>
                            <td>{{ $aset->nama_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Alamat:</td>
                            <td>{{ $aset->alamat_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Luas Aset:</td>
                            <td>{{ $aset->luas_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Status Aset:</td>
                            <td>{{ $aset->status_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Kondisi Aset:</td>
                            <td>{{ $aset->kondisi_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Kondisi Geografis:</td>
                            <td>{{ $aset->kondisi_geografis }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Asal Aset</td>
                            <td>{{ $aset->asalusul_aset }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Tahun Kepemilikan</td>
                            <td>{{ $aset->th_kepemilikan }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Tahun Pembangunan</td>
                            <td>{{ $aset->th_pembangunan }}</td>
                        </tr>
                    </div>
                </div> 
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Tahun Pembangunan</td>
                            <td>{{ $aset->th_pembangunan }}</td>
                        </tr>
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Tahun Rehab</td>
                            <td>{{ $aset->th_rehab }}</td>
                        </tr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <tr>
                            <td>Keterangan</td>
                            <td>{{ $aset->keterangan_aset }}</td>
                        </tr>
                    </div>
                </div>
            </table>
            {{-- @endforeach --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

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

    {{-- <div class="row text-center">
        {!! $asets->links() !!}
    </div> --}}
</div>
        </div>
    </div>
</div>
@endsection
