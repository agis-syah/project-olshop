@extends('main')

@section('title','Form Data Supplier')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Supplier</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">List Data Supplier</a></li>
                        <li class="breadcrumb-item active">Form Data Supplier</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">Form Data Supplier</h3>
            </div>
            <div class="card-body">
            <form action="{{ isset($data)
                ?route("supplier.update",[$data->id])
                :route("supplier.store") }}" method="POST" autocomplete="off">
                @csrf
                @if (isset($data))
                    @method("PUT")
                @endif
                <div class="form-group">
                    <label for="nama">Nama Supplier</label>
                    <input type="text" class="form-control @error("nama") is-invalid @enderror" name="nama" value="{{ (isset($data)?$data->nama:old("nama")) }}">
                    @error("nama")
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control @error("alamat") is-invalid @enderror" name="alamat" value="{{ (isset($data)?$data->alamat:old("alamat")) }}">
                    @error("alamat")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control @error("telepon") is-invalid @enderror" name="telepon" value="{{ (isset($data)?$data->telepon:old("telepon")) }}">
                    @error("telepon")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error("email") is-invalid @enderror" name="email" value="{{ (isset($data)?$data->email:old("email")) }}">
                     @error("email")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="{{ route('supplier.index') }}" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection