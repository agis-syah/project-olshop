@extends('main')

@section('title','Form Detail Pembayarang')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Detail Pembayaran</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="laporanpenjualan">List Penjualan</a></li>
                        <li class="breadcrumb-item active">Form Detail Pembayaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Form Detail Pembayaran</h3>
            </div>
            <div class="card-body">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <h2>No. Resi        : 28192839123919</h2>
                <p>Nama             : Adit</p>
                <p>Kode Barang      : #201911180001</p>
                <p>Jenis Barang     : Laptop</p>
                <p>Merk             : Acer</p>
                <p>Nama Barang      : Acer Predator 3000</p>
<<<<<<< HEAD
                <p> Status          :
                        
                            <select name="status">
                                <option value="Komputer">
                                    Proses</option>
                                <option value="Laptop">
                                    Dikirim</option>
                                <option value="Gadget">
                                    Selesai</option>
                            </select>
                </p>

                <div class="form-group float-right">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                        <a href="laporanpenjualan" class="btn btn-danger"><i class="fa fa-arrow-left"> Kembali</i></a>
                    </div>
            </div>
            
=======
                <p>Status Bayar     : Proses</p>
            </div>
            <div class="form-group float-right">
                <a href="laporanpenjualan" class="btn btn-warning"><i class="fa fa-arrow-left"> Kembali</i></a>
            </div>
>>>>>>> ec8aac93a43b123fce0e3574731608636857a1cc
        </form>
        </div>
    </div>
</div>
    
@endsection