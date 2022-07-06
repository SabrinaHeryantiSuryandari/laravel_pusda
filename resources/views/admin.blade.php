@extends('layouts/master')
@section('content')
    @section('title')
        {{'halaman admin'}}
    @endsection
    @section('judul')
        {{'Dashboard'}}
    @endsection
<!-- Content Row -->
<div class="row">
    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                        {{-- <i class="fa-solid fa-circle-caret-right"></i> --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
                        <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

             <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-7 mb-5">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-0">7 </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total Aset Belum Terdaftar</div>
                    </div>
                    <div class="col-auto">
                        {{-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> --}}
                    </div>
                </div>
            </div>
        </div>         
    </div>
                        
                    {{-- </div>
                </div> --}}
                        
                        <!-- Pending Requests Card Example -->
                        {{-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
    {{-- </div>                          --}}
                    <!-- Content Row -->
                    
    <div class="row">
                    <!-- Area Chart -->
        <div class="card text-center mx-3 my-3 col-12">
            <div class="card-header">INDEX ASET TERDATA</div>
                <canvas id="myChart" width="400" height="100"></canvas>
            <div class="card-footer text-muted">2 days ago</div>
        </div>
                        
                        <!-- Pie Chart -->
     </div>
            {{-- </div> --}}
</div>  
 
                    <!-- Content Row -->
                    
@endsection