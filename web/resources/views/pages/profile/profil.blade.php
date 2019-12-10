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
            <form action="" method="POST" autocomplete="off" class="row">
                @csrf
                <div class="col-md-3">

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error("nama") is-invalid @enderror" name="nama" value="">
                        @error("nama")
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input type="date" class="form-control @error("tanggal") is-invalid @enderror" name="tanggal" value="">
                        @error("tanggal")
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
                    </div>

                    <div class="form-group col-md-12 @error("alamat") is-invalid @enderror">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat"
                            class="form-control"
                            cols="30" rows="5">{{ isset($data)?$data->descriptions:old("alamat") }}</textarea>
                        @error("alamat")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                </div>
                <div class="col-md-4">
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
                        <label for="kelamin">Jenis Kelamin</label>
                            <select name="kelamin" class="form-control">
                                <option value="Pria">
                                    Pria</option>
                                <option value="Wanita">
                                    Wanita</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <a href="password" class="btn btn-primary btn-block"
                            style="margin-top:48px;"><i class="fa fa-key"> Ubah Password</i></a>
                    </div>

                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success" style="margin-top:30px"><i class="fa fa-save"> Simpan</i></button>
                        <a href="ongkir" class="btn btn-danger" style="margin-top:30px"><i class="fa fa-arrow-left"> Batal</i></a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection