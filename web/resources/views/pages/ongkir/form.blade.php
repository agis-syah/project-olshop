@extends('main')

@section('title','Form Ongkir')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Form Data Ongkir</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('ongkir.index') }}">Ongkir</a></li>
                        <li class="breadcrumb-item active">Form Data Ongkir</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Form Data Ongkir</h3>
            </div>
            <div class="card-body">
            <form action="{{ isset($data)
                ?route("ongkir.update",[$data->id])
                :route("ongkir.store") }}" method="POST" autocomplete="off">
                @csrf
                @if (isset($data))
                    @method("PUT")
                @endif
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                        <select name="wilayah" class="form-control">
                            <option value="Binjai" {{ isset($data) && $data->wilayah=="Binjai"?"selected":'' }}>
                                Binjai</option>
                            <option value="Kisaran" {{ isset($data) && $data->wilayah=="Kisaran"?"selected":'' }}>
                                Kisaran</option>
                            <option value="Medan" {{ isset($data) && $data->wilayah=="Medan"?"selected":'' }}>
                                Medan</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value="{{ (isset($data)?$data->harga:old("harga")) }}">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="{{ route("ongkir.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection