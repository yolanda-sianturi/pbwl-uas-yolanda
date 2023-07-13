<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kategori;
use App\Models\konsumen;
use App\Models\paket;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create',[
            'kategori' => Kategori::get(),
            'customer' => Customer::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create(
            [
                'transaksi_id_kategori' => $request->transaksi_id_kategori,
                'transaksi_tgl_booking' => $request->transaksi_tgl_booking,
                'transaksi_id_customer' => $request->transaksi_id_customer,
                'transaksi_harga' => $request->transaksi_harga,
                'transaksi_jumlah_bayar' => $request->transaksi_jumlah_bayar
            ]
        );

        return redirect('transaksi')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Transaksi::findOrFail($id);
        return view('transaksi.edit',[
            'kategori' => Kategori::get(),
            'customer' => Customer::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Transaksi::findOrFail($id);
        $row->update(
            [
                'transaksi_id_kategori' => $request->transaksi_id_kategori,
                'transaksi_tgl_booking' => $request->transaksi_tgl_booking,
                'transaksi_id_customer' => $request->transaksi_id_customer,
                'transaksi_harga' => $request->transaksi_harga,
                'transaksi_jumlah_bayar' => $request->transaksi_jumlah_bayar
            ]
        );
        return redirect('transaksi')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Transaksi::findOrFail($id);
        $row->delete();

        return redirect('transaksi')->with('success', 'Data berhasil dihapus');
    }
}