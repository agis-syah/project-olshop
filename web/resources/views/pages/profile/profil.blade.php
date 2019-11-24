@extends('main')

@section('title','Form Profile')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Form Profile</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="ongkir">Profile</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header text-white" style="background:grey;">
                <h3 class="card-title">Form Profile</h3>
            </div>
            <div class="card-body">
            <form action="" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="harga">Nama</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Tanggal Lahir</label>
                    <input type="date" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Jenis Kelamin</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Alamat</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Telepon</label>
                    <input type="text" class="form-control @error("harga") is-invalid @enderror" name="harga" value="">
                    @error("harga")
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group float-left">
                    <a href="password" class="btn btn-primary"><i class="fa fa-key"> Ubah Password</i></a>
                </div>
                <div class="form-group float-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</i></button>
                    <a href="ongkir" class="btn btn-danger"><i class="fa fa-arrow-left"> Batal</i></a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection