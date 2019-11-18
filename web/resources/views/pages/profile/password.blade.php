@extends('main')

@section('title','Edit Password')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Edit Password</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="profil">Profile</a></li>
                        <li class="breadcrumb-item">Edit Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-warning password-white">
                <h3 class="card-title">Edit Password</h3>
            </div>
            <div class="card-body">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="harga">Password Lama</label>
                    <input type="password" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Password Baru</label>
                    <input type="password" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Konfirmasi Password</label>
                    <input type="password" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="profil" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection