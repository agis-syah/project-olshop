@extends('main')

@section('title','Form Detail Produk')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Detail Produk</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('detailproduk.index') }}">List Detail Produk</a></li>
                        <li class="breadcrumb-item active">Detail Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Detail Produk</h3>
            </div>
            <div class="card-body">
            <form action="">
            <form action={{isset($data)
                    ?route("detailproduk.update",[$data->id])
                    :route("detailproduk.store")}} 
                method="POST" autocomplete="off">
                @csrf
                @if (isset($data))
                        @method("PUT")
                @endif
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <select name="id_barang" id="id_barang" class="form-control">
                        @foreach ($barang as $item)
                            <option value="{{ $item->id }}"
                                {{ isset($data) && $data->id_barang==$item->id?"selected":"" }}>{{ $item->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="procie">Processor</label>
                    <input type="text" class="form-control @error("procie") is-invalid @enderror" name="procie" value='{{ isset($data)?$data->procie:old("procie") }}'>
                    @error("procie")
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                </div>
                <label for="penyimpanan">Penyimpanan</label>
                <div class="card">
                    <div class="card-body">
                    <div class="form-group">
                        <label for="ram">RAM</label>
                        <select name="ram" id="ram" class="form-control">
                            <option value="2">2 GB</option>
                            <option value="4">4 GB</option>
                            <option value="8">8 GB</option>
                            <option value="8on">8 GB (4 GB onboard + 4 GB)</option>
                            <option value="16">16 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Jenis RAM</label>
                        <input type="text" name="tipe" id="" class="form-control" placeholder="Masukkan jenis tipe 'Contoh : DDR4'">
                    </div>
                    <div class="form-group">
                        <label for="ssd">SSD</label>
                        <select name="ssd" id="ssd" class="form-control">
                            <option value="none">None</option>
                            <option value="120">120 GB</option>
                            <option value="240">240 GB</option>
                            <option value="480">480 GB</option>
                            <option value="512">512 GB</option>
                            <option value="1">1 TB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hdd">HDD</label>
                        <select name="hdd" id="hdd" class="form-control">
                            <option value="none">None</option>
                            <option value="250">250 GB</option>
                            <option value="320">320 GB</option>
                            <option value="500">500 GB</option>
                            <option value="1t">1 TB</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="display">Display</label>
                    <input type="text" class="form-control @error("display") is-invalid @enderror" name="display" value='{{ isset($data)?$data->display:old("display") }}'>
                    @error("display")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="network">Network</label>
                    <input type="text" class="form-control @error("network") is-invalid @enderror" name="network" value='{{ isset($data)?$data->network:old("network") }}'>
                    @error("network")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="baterai">Baterai</label>
                    <input type="text" class="form-control @error("baterai") is-invalid @enderror" name="baterai" value='{{ isset($data)?$data->baterai:old("baterai") }}'>
                    @error("baterai")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="{{ route("detailproduk.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection