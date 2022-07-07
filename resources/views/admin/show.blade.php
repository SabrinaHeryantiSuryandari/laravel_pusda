@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Detail Aset'}}
    @endsection
    @section('title')
        {{'Detail Aset'}}
    @endsection

<!-- Content Row -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        {{-- <div>
            <h2> Detail Aset </h2>
        </div> --}}
        <div>
            {{-- <a class="btn btn-primary" href="/laporan"> Back</a> --}}
        </div>
    </div>
</div>
<div class="row">
    <div class="card shadow mb-3 ">
        <div class="card-header py-2 ">
            {{-- <h6 class="m-0 font-weight-bold text-black text-center">Laporan Data Aset</h6> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive" >
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
            </div>
        </div>
    </div>
</div>
@endsection