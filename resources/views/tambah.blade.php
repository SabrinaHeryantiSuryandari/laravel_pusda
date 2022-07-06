@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Input Data'}}
    @endsection
    @section('title')
        {{'Input Data'}}
    @endsection

<!-- Content Row -->
{{-- <div class="row container-fluid"> --}}
                    <!-- DataTales Example -->
                    {{-- <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}

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
                                @foreach ($post as $item)
                                <div class="col-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->title }}</h5>
                                            <p class="card-text">{{ substr($item->content, 0, 100) }}</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}

<center>
    <h2>Masukkan Data Aset Tanah</h2>
</center>
<br><br>
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" enctype="multipart/form-data">
        @csrf
            <table style="margin:20px auto;">
                <tr>
                    <td>No Sertifikat</td>
                    <td>
                        <input type="text" name="no_sertifikat" value="{{ old('no_sertifikat') }}">
                        <br>
                        <small class="text-danger">{{ $errors->first('no_sertifikat') }}</small>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea id="w3review" name="alamat_aset" rows="4" cols="50">{{ old('alamat_aset') }}</textarea>
                        <br>
                        <small class="text-danger">{{ $errors->first('alamat_aset') }}</small>
                    </td>
                </tr>            
                <tr>
                    <td>Luas Aset</td>
                    <td>
                        <input id="text" name="luas_aset" value="{{ old('luas_aset') }}">
                        <br>
                        <small class="text-danger">{{ $errors->first('luas_aset') }}</small>
                    </td>
                </tr>
                <tr>
                    <td>Status Aset</td>
                    <td>
                        <select name="status_aset" value="{{ old('status_aset') }}">
                            <option value="" selected>--Pilih Status--</option>
                            <option value="Tersertifikasi">Tersertifikasi</option>
                            <option value="Dalam Verifikasi">Dalam Verifikasi</option>
                            <option value="Belum Terdata">Belum Terdata</option>
                        </select>
                        <br>
                        <small class="text-danger">{{ $errors->first('status_aset') }}</small>
                    </td>
                </tr>
                <tr>
                    <td>Kondisi Daerah Aliran Sungai</td>
                    <td>
                        <select name="kondisi_das" value="{{ old('kondisi_das') }}">
                            <option value="" selected>--Pilih Kondisi--</option>
                            <option value="Berfungsi">Berfungsi</option>
                            <option value="Tidak Berfungsi">Tidak Berfungsi</option>
                        </select>
                        <br>
                        <small class="text-danger">{{ $errors->first('kondisi_das') }}</small>
                    </td>
                </tr>
                <tr>
                    <td>Kondisi Bangunan</td>
                    <td>
                        <select name="kondisi_bangunan" value="{{ old('kondisi_bangunan') }}">
                            <option value="" selected>--Pilih Kondisi--</option>
                            <option value="Layak">Layak</option>
                            <option value="Tidak Layak">Tidak Layak</option>
                            <option value="Tidak Layak">Tidak ada bangunan</option>
                        </select>
                        <br>
                        <small class="text-danger">{{ $errors->first('kondisi_bangunan') }}</small>
                    </td>
                </tr>
                <tr>
                    <td>Kondisi Geografis</td>
                    <td>
                        <select name="kondisi_geografis" value="{{ old('kondisi_geografis') }}">
                            <option value="" selected>--Pilih Kondisi Geografis--</option>
                            <option value="Dataran Tinggi">Dataran Tinggi</option>
                            <option value="Dataran Rendah">Dataran Rendah</option>
                            <option value="Daerah Perairan">Daerah Perairan</option>
                        </select>
                        <br>
                        <small class="text-danger">{{ $errors->first('kondisi_geografis') }}</small>
                    </td>
                </tr>
                <tr>
                    <td>Asal Usul Aset</td>
                    <td>
                        <select name="kondisi_bangunan" value="{{ old('kondisi_bangunan') }}">
                            <option value="" selected>--Pilih Asal Usul--</option>
                            <option value="Pembelian">Pembelian</option>
                            <option value="Hibah">Hibah</option>
                        </select>
                        <br>
                        <small class="text-danger">{{ $errors->first('kondisi_bangunan') }}</small>
                    </td>
                </tr>
                {{-- <td>Tahun Kepemilikan</td> --}}
                <tr>
                    <td>Tahun Kepemilikan</td>
                    <td>
                        {{-- <input type="date" id="text" name="th_kepemilikan" value="{{ old('th_kepemilikan') }}"> --}}
                        <input id="text" name="th_kepemilikan" value="{{ old('th_kepemilikan') }}">
                        <br>
                        <small class="text-danger">{{ $errors->first('th_kepemilikan') }}</small>
                    </td>
                </tr>
                {{-- <td>Tahun Pembangunan</td> --}}
                <tr>
                    <td>Tahun Pembangunan</td>
                    <td>
                        {{-- <input type="date" id="text" name="th_pembangunan" value="{{ old('th_pembangunan') }}"> --}}
                        <input id="text" name="th_pembangunan" value="{{ old('th_pembangunan') }}">
                        <br>
                        <small class="text-danger">{{ $errors->first('th_pembangunan') }}</small>
                    </td>
                </tr>
                {{-- <td>Tahun Rehab</td> --}}
                <tr>
                    <td>Tahun Rehab</td>
                    <td>
                        {{-- <input type="date" id="text" name="th_rehab" value="{{ old('th_rehab') }}"> --}}
                        <input id="text" name="th_rehab" value="{{ old('th_rehab') }}">
                        <br>
                        <small class="text-danger">{{ $errors->first('th_rehab') }}</small>
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>
                        <input id="text" name="keterangan" value="{{ old('keterangan') }}">
                        <br>
                        <small class="text-danger">{{ $errors->first('keterangan') }}</small>
                    </td>
                </tr>
                {{-- <tr>
                    <td>File Gambar Sampul</td>
                    <td>
                        <input type="file" name="gambar_buku" value="{{ old('gambar_buku') }}">
                        <br>
                        <small class="text-danger">{{ $errors->first('gambar_buku') }}</small>
                    </td>
                </tr> --}}
                <td></td>
                {{-- <td><input type="button" onclick="window.history.back()" value="kembali"></td> --}}
                <td><input type="submit" value="Simpan"></td>
            </table>
        </form>
    </div>

@endsection