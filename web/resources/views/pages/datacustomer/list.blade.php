@extends('main')

@section('title','List Data Customer')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Customer</h1></div>
                <div class="col-6">
                <ul class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">List Data Customer</li>    
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
                <h3 class="card-title">List Data Customer</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Customer</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th colspan="2">Action</th>
        
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1. </td>
                                <td>Adit</td>
                                <td>Jl. Sei Deli, Medan Denai</td>
                                <td>081922002200</td>
                                <td>Laki-Laki</td>
                                <td> <button class="btn btn-primary btn-block"><i class="fa fa-undo"> Reset Password</i></button></td>
                                <td>
                                <form action="" method="POST">
                                    @method("delete")
                                    @csrf
                                        <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
             </div>
        </div>
    </section>
    <section class="content">
    </section>
</div>    
    
@endsection