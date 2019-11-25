@extends('main')

@section('title','List Data Barang')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Barang</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">List Data Barang</li>    
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
                <h3 class="card-title">List Data Barang</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                <a href="formdatabarang" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok</th>
                            <th>Harga Jual</th>
                            <th>Total Harga</th>
                            <th colspan="2">Action</th>
        
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1. </td>
                                <td>Acer</td>
                                <td>Acer Predator 3000</td>
                                <td>Laptop</td>
                                <td>20</td>
                                <td>Rp. 13.000.000</td>
                                <td>Rp. 260.000.000</td>
                                <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> ubah</a></td>
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