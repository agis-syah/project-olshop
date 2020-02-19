@extends('main')

@section('title','Form Data Merk')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Merk</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("merk.index") }}">List Data Merk</a></li>
                        <li class="breadcrumb-item active">Form Data Merk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Form Data Merk</h3>
            </div>
            <div class="card-body">
            <form action={{isset($data)
                    ?route("merk.update",[$data->id])
                    :route("merk.store")}} 
                method="POST" autocomplete="off">
                @csrf
                @if (isset($data))
                        @method("PUT")
                @endif
                <div class="form-group">
                    <label for="nama">Merk</label>
                    <input type="text" class="form-control @error("nama") is-invalid @enderror" name="nama" value='{{ isset($data)?$data->nama:old("nama") }}'>
                    @error("nama")
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group col-md-12">
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
                
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="{{ route("merk.index") }}" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection