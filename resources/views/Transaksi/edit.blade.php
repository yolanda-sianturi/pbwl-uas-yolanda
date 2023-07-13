@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/transaksi/' .$row->transaksi_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA KATEGORI</label>
                        <select name="transaksi_id_kategori" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($kategori as $ktg)
                                <option value="{{$ktg->kategori_id}}">{{$ktg->kategori_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA CUSTOMER</label>
                        <select name="transaksi_id_customer" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($customer as $cus)
                                <option value="{{$cus->customer_id}}">{{$cus->customer_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL</label>
                        <input type="date" name="transaksi_tgl_booking" class="form-control" value="{{$row->transaksi_tgl_booking}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="transaksi_harga" class="form-control" value="{{$row->transaksi_harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BAYAR</label>
                        <input type="text" name="transaksi_jumlah_bayar" class="form-control" value="{{$row->transaksi_jumlah_bayar}}">
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