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
            <form action="{{ route('user.update') }}" method="POST" autocomplete="off" class="row">
                @csrf
                <div class="col-md-3">

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error("name") is-invalid @enderror" name="name" value="{{ isset($data)?$data->name:old("name") }}">
                        @error("name")
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input type="date" class="form-control @error("tanggal") is-invalid @enderror" name="tanggal" value="{{ isset($data)?$data->tanggal:old("tanggal") }}">
                        @error("tanggal")
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error("email") is-invalid @enderror" name="email" value="{{ isset($data)?$data->email:old("email") }}">
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
                        <input type="text" class="form-control @error("telepon") is-invalid @enderror" name="telepon" value="{{ isset($data)?$data->telepon:old("telepon") }}">
                        @error("telepon")
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-control">
                            {{-- @foreach ($user as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($user) && $user->kelamin==$item->id?"selected":"" }}
                                    >{{ $item->kelamin }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div class="form-group">
                        <a href="password" class="btn btn-primary btn-block"
                            style="margin-top:48px;"><i class="fa fa-key"> Ubah Password</i></a>
                    </div>

                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success" style="margin-top:30px"><i class="fa fa-save"> Simpan</i></button>
                        <a href="{{ route('home') }}" class="btn btn-danger" style="margin-top:30px"><i class="fa fa-arrow-left"> Batal</i></a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection