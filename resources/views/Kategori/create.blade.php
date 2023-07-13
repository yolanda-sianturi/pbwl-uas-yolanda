@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA KATEGORI</h3>      
            </div>
            <div class="card-body">
                <form action="{{ url('/kategori')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="">NAMA KATEGORI</label>
                        <input type="text" name="kategori_nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA KATEGORI</label>
                        <input type="text" name="kategori_harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection