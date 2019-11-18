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
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="">List Data Supplier</a></li>
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
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="id">ID Supplier</label>
                    <input type="text" class="form-control @error("id") is-invalid @enderror" name="id" value="">
                    @error("id")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Supplier</label>
                    <input type="text" class="form-control @error("nama") is-invalid @enderror" name="nama" value="">
                    @error("nama")
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control @error("alamat") is-invalid @enderror" name="alamat" value="">
                    @error("alamat")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control @error("telepon") is-invalid @enderror" name="telepon" value="">
                    @error("telepon")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error("email") is-invalid @enderror" name="email" value="">
                     @error("email")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="supplier" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection