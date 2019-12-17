@extends('main')

@section('title','List Data Return')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Return</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">List Data Return</li>    
                </ul>    
                </div>    
            </div>    
        </div>    
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success">
                <i class="fa fa-info-circle"></i>{{$message}}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">List Data Return</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Customer</th>
                            <th>Kode Beli</th>
                            <th>Nama Barang</th>
                            <th>Tgl Beli</th>
                            <th>Kondisi</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
        
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Adit</td>
                                <td>#201911180001</td>
                                <td>Acer Predator 3000</td>
                                <td>18 November 2019</td>
                                <td>Sedikit Lecet Pada Barang</td>
                                <td>Belum Selesai</td>
                                <td><a href="" class="btn btn-warning btn-block">Selesai</a></td>
                                <td>
                                <form action="" method="POST">
                                    @method("delete")
                                    @csrf
                                        <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
             </div>
        </div>
    </section>
    <section class="content">
    </section>
</div>    
    
@endsection