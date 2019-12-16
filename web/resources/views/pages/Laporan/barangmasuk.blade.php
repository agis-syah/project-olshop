@extends('main')

@section('title','Laporan Barang Masuk')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Barang Masuk</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Laporan Barang Masuk</li>    
                </ul>    
                </div>    
            </div>    
        </div>    
    </section>
    <section class="content">
            <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Laporan Barang Masuk</h3>
                    </div>
                    <div class="card-body">
                            {{-- {{ route("report.brgmasuk") }}  untuk memanggil report penjualan--}}
                        <form action="" method="GET" class="row"> 
                            <div class="form-group col-md-6">
                                <label for="daritanggal">Dari Tanggal</label>
                                <input type="date" class="form-control"
                                    name="daritanggal"
                                    value="{{ isset($_GET["daritanggal"])?$_GET["daritanggal"]:"" }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sampaitanggal">Sampai Tanggal</label>
                                <input type="date" class="form-control"
                                    name="sampaitanggal"
                                    value="{{ isset($_GET["sampaitanggal"])?$_GET["sampaitanggal"]:"" }}">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="supplier">Supplier</label>
                                    <select name="supplier" id="supplier" class="form-control">
                                    @foreach ($supplier as $item)
                                        <option value="{{ $item->id }}"
                                            {{ isset($_GET["supplier"]) && $_GET["supplier"]==$item->id
                                                ?"selected":"" }}>
                                            {{ $item->nama }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            <div class="form-group col-md-6 offset-md-6">
                                <button class="btn btn-success btn-block mt-auto">
                                    Generate</button>
                            </div>
                        </form>
                    </div>
                </div>

        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Laporan Penjualan</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Nama Barang</th>
                            <th>Tgl Beli</th>
                            <th>Jumlah Barang</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Adit</td>
                                <td>Acer Predator 3000</td>
                                <td>18 November 2019</td>
                                <td>1</td>
                                <td>Rp.13.000.000</td>
                                <td>Proses</td>
                                <td><a href="detail" class="btn btn-primary btn-block"><i class="fa fa-eye"> Lihat</i></a></td>
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