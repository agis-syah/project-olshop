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
            <form action={{isset($data)
                    ?route("databarang.update",[$data->id])
                    :route("databarang.store")}} 
                method="POST" autocomplete="off">
                @csrf
                @if (isset($data))
                        @method("PUT")
                @endif
                <div class="form-group">
                        <label for="kode">Kode Barang</label>
                        <input type="text" class="form-control @error("kode") is-invalid @enderror" name="kode" 
                                value='{{ isset($data)?$data->kode:old("kode") }}' 
                                style="{{ isset($data)?"pointer-events:none;":old("kode") }}">
                        @error("kode")
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control @error("merk") is-invalid @enderror" name="merk" value='{{ isset($data)?$data->merk:old("merk") }}'>
                    @error("merk")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control @error("nama") is-invalid @enderror" name="nama" value='{{ isset($data)?$data->nama:old("nama") }}'>
                    @error("nama")
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Barang</label>
                        <select name="jenis" class="form-control">
                            <option value="k" {{ isset($data) && $data->jenis=="k"?"selected":'' }}>
                                Komputer</option>
                            <option value="l" {{ isset($data) && $data->jenis=="l"?"selected":'' }}>
                                Laptop</option>
                            <option value="g" {{ isset($data) && $data->jenis=="g"?"selected":'' }}>
                                Gadget</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="stok">Stok Barang</label>
                    <input type="text" class="form-control @error("stok") is-invalid @enderror" name="stok" value='{{ isset($data)?$data->stok:old("stok") }}'>
                     @error("stok")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value='{{ isset($data)?$data->harga:old("harga") }}'>
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="detail">Detail Produk</label>
                    <textarea type="text" class="form-control @error("detail") is-invalid @enderror" name="detail" value='{{ isset($data)?$data->detail:old("detail") }}'></textarea>
                    @error("detail")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="{{ route("databarang.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection