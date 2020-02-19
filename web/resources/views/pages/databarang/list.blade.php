@extends('main')

@section('title','List Data Barang')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Barang</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">List Data Barang</li>    
                </ul>    
                </div>    
            </div>    
        </div>    
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success">
                <i class="fa fa-info-circle"></i>{{$message}}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="card-title">List Data Barang</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                <a href="{{ route("databarang.create") }}" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Merk</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Stok</th>
                            <th>Harga Jual</th>
                            <th>Total Harga</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }} </td>
                            <td>{{ $item->merk->nama }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->merk->jenis=="l"?"Laptop":($item->merk->jenis=="k"?"Komputer":"Gadget") }}</td>
                            <td>{{ $item->stok }} Unit</td>
                            <td>Rp. {{ $item->harga }}</td>
                            <td>Rp. {{ $item->stok * $item->harga }}</td>
                            <td><a href="{{ route("databarang.show",[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> ubah</a></td>
                            <td>
                            <form action="{{ route("databarang.destroy",[$item->id]) }}" method="POST">
                                @method("delete")
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
    </section>
    <section class="content">
    </section>
</div>    
    
@endsection