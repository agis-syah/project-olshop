@extends('main')

@section('title','Form Data Barang')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Barang</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="">List Data Barang</a></li>
                        <li class="breadcrumb-item active">Form Data Barang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Form Data Barang</h3>
            </div>
            <div class="card-body">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Barang</label>
                    <input type="text" class="form-control @error("kode") is-invalid @enderror" name="kode" value="">
                    @error("kode")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control @error("nama") is-invalid @enderror" name="nama" value="">
                    @error("nama")
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control @error("merk") is-invalid @enderror" name="merk" value="">
                    @error("merk")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Barang</label>
                        <select name="jenis" class="form-control">
                            <option value="Komputer">
                                Komputer</option>
                            <option value="Laptop">
                                Laptop</option>
                            <option value="Gadget">
                                Gadget</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="stok">Stok Barang</label>
                    <input type="text" class="form-control @error("stok") is-invalid @enderror" name="stok" value="">
                     @error("stok")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="detail">Detail Produk</label>
                    <input type="text" class="form-control @error("detail") is-invalid @enderror" name="detail" value="">
                    @error("detail")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="data" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection