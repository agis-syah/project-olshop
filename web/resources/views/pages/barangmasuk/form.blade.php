@extends('main')

@section('title','Form Barang Masuk')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6">
                    <h1>Barang Masuk</h1>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="">List Barang Masuk</a></li>
                        <li class="breadcrumb-item active">Form Barang Masuk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Form Barang Masuk</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                    ?route("barangmasuk.update",[$data->id])
                    :route("barangmasuk.store") }} method="POST" autocomplete="off" class="row">
                    @csrf
                    @if (isset($data))
                    @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="kode">Kode Barang</label>
                        <input type="text" class="form-control @error(" kode") is-invalid @enderror" name="kode"
                            value="" readonly>
                        @error("kode")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <select name="id_barang" id="id_barang" class="form-control">
                            @foreach ($barang as $item)
                            <option value="{{ $item->id }}"
                                {{ isset($data) && $data->id_barang==$item->id?"selected":"" }}>{{ $item->nama }}
                            </option>
                            @endforeach
                        </select>
                        @error("nama")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" class="form-control @error(" merk") is-invalid @enderror" name="merk"
                            value="">
                        @error("merk")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Barang</label>
                        <select name="jenis" class="form-control">
                            <option value="k">
                                Komputer</option>
                            <option value="l">
                                Laptop</option>
                            <option value="g">
                                Gadget</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl">Tgl Masuk</label>
                        <input type="date" class="form-control @error(" tgl") is-invalid @enderror" name="tgl" value="">
                        @error("tgl")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok Barang</label>
                        <input type="text" class="form-control @error(" stok") is-invalid @enderror" name="stok"
                            value="">
                        @error("stok")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error(" harga") is-invalid @enderror" name="harga"
                            value="">
                        @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Supplier</label>
                        <select name="id_supplier" id="id_supplier" class="form-control">
                            @foreach ($supplier as $item)
                            <option value="{{ $item->id }}"
                                {{ isset($data) && $data->id_supplier==$item->id?"selected":"" }}>{{ $item->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                        <a href="{{ route("barangmasuk.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left">
                                Batal</i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection