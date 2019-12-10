@extends('main')

@section('title','List Barang Masuk')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Barang Masuk</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active">List Barang Masuk</li>    
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
                <h3 class="card-title">List Barang Masuk</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                <a href="{{ route("barangmasuk.create") }}" class="btn btn-success"><i class="fa fa-plus"></i>Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>Jenis Barang</th>
                            <th>Nama Barang</th>
                            <th>Tgl Masuk</th>
                            <th>Qty</th>
                            <th>Harga Total</th>
                            <th colspan="2">Action</th>
        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }}</td>
                            <td>{{ $item->databarang->merk }}</td>
                            <td>{{ $item->namajenis }}</td>
                            <td>{{ $item->databarang->nama }}</td>                            
                            <td>{{ $item->tanggal }}</td>                            
                            <td>{{ $item->stok }}</td>                            
                            <td>{{ $item->harga }}</td>                            
                            <td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> ubah</a></td>
                            <td>
                            <form action="" method="POST">
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
</div>    
    
@endsection