@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA CUSTOMER</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('customer/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>NAMA</td>
                        <td>ALAMAT</td>
                        <td>NO TELEPON</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->customer_id}}</td>
                        <td>{{ $row->customer_nama}}</td>
                        <td>{{ $row->customer_alamat}}</td>
                        <td>{{ $row->customer_no_tlpn}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('customer/' .$row->customer_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('customer/' .$row->customer_id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection