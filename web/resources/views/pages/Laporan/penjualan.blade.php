@extends('main')

@section('title','Laporan Penjualan')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Penjualan</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Laporan Penjualan</li>    
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
                <h3 class="card-title">Laporan Penjualan</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
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
<<<<<<< HEAD
                                <td><a href="detail" class="btn btn-primary btn-block"><i class="fa fa-eye"> Lihat</i></a></td>
=======
                                <td><a href="detail" class="btn btn-primary"><i class="fa fa-eye"> Lihat</i></a></td>
                                <td>
                                    <div class="form-group">
                                            <select name="status" class="form-control">
                                                <option value="Proses">
                                                    <a href="#">Proses</a></option>
                                                <option value="Dikirim">
                                                    <a href="#">Dikirim</a></option>
                                                <option value="Selesai">
                                                    <a href="#">Selesai</a></option>
                                            </select>
                                    </div>
                                </td>
>>>>>>> ec8aac93a43b123fce0e3574731608636857a1cc
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