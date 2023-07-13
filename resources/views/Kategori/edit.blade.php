@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA KATEGORI</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/kategori/' .$row->kategori_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA KATEGORI</label>
                        <input type="text" name="kategori_nama" class="form-control" value="{{$row->kategori_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA KATEGORI</label>
                        <input type="text" name="kategori_harga" class="form-control" value="{{$row->kategori_harga}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection