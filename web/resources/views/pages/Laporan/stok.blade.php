@extends('main')

@section('title','Laporan Stok Barang')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Stok Barang</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Laporan Stok Barang</li>    
                </ul>    
                </div>    
            </div>    
        </div>    
    </section>
    <section class="content">
        <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">Laporan Stok Barang</h3>
                </div>
                <div class="card-body">
                        {{-- {{ route("report.penjualan") }}  untuk memanggil report penjualan--}}
                    <form action="{{ route('pages.laporan.stok') }}" method="GET"> 
                        <div class="form-group col-md-6">
                            <label for="merk">Merk</label>
                            <select name="merk" id="merk" class="form-control">
                            @foreach ($merk as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($_GET["merk"]) && $_GET["merk"]==$item->id
                                        ?"selected":"" }}>
                                    {{ $item->merk->nama }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 offset-md-6">
                            <button class="btn btn-success btn-block mt-auto"
                            style="position:absolute;bottom:16px">
                                Generate</button>
                        </div>
                    </form>
                </div>
            </div>

    <div class="card">
        <div class="card-header bg-warning text-white">
            <h3 class="card-title">Laporan Stok</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Stok</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->merk }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis=="l"?"Laptop":($item->jenis=="k"?"Komputer":"Gadget") }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>Rp.{{ $item->harga }}</td>
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