@extends('main')

@section('title','List Detail Produk')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Detail Produk</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">List Detail Produk</li>    
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
                <h3 class="card-title">List Detail Produk</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                <a href="{{ route("detailproduk.create") }}" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Processor</th>
                            <th>Ram</th>
                            <th>Jenis Ram</th>
                            <th>SSD</th>
                            <th>HDD</th>
                            <th>Display</th>
                            <th>Network</th>
                            <th>Baterai</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }} </td>
                            <td>{{ $item->barang->nama }}</td>
                            <td>{{ $item->procie }}</td>
                            <td>{{ $item->namaram }}</td>
                            <td>{{ $item->tipe }}</td>
                            <td>{{ $item->namassd }}</td>
                            <td>{{ $item->namahdd }}</td>
                            <td>{{ $item->display }}</td>
                            <td>{{ $item->network }}</td>
                            <td>{{ $item->baterai }}</td>
                            <td><a href="{{ route("detailproduk.show",[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> ubah</a></td>
                            <td>
                            <form action="{{ route("detailproduk.destroy",[$item->id]) }}" method="POST">
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