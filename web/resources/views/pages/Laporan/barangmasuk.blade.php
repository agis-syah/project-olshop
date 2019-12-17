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
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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
                        <form action="{{ route('pages.laporan.barangmasuk') }}" method="GET" class="row"> 
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
                                    <select name="id_supplier" id="id_supplier" class="form-control">
                                    @foreach ($supplier as $item)
                                        <option value="{{ $item->id }}"
                                            {{ isset($_GET["id_supplier"]) && $_GET["id_supplier"]==$item->id
                                                ?"selected":"" }}>
                                            {{ $item->id_supplier }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            <div class="form-group col-md-6 offset-md-6">
                                <button class="btn btn-success btn-block mt-auto"
                                style="position:absolute;bottom:16px">
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
                            <th>Merk</th>
                            <th>Jenis Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Masuk</th>
                            <th>Qty</th>
                            <th>Harga Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tgl }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>
                            <form action="" method="POST">
                                @method("delete")
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
             </div>
        </div>
    </section>
    <section class="content">
    </section>
</div>    
    
@endsection