<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Customer::all();
        return view('customer.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create(
            [
                'customer_nama' => $request->customer_nama,
                'customer_alamat' => $request->customer_alamat,
                'customer_no_tlpn' => $request->customer_no_tlpn
            ]
        );

        return redirect('customer')->with('success','Data berhasil ditambahkan');
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
        $row = Customer::findOrFail($id);
        return view('customer.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Customer::findOrFail($id);
        $row->update(
            [
                'customer_nama' => $request->customer_nama,
                'customer_alamat' => $request->customer_alamat,
                'customer_no_tlpn' => $request->customer_no_tlpn
            ]
        );
        return redirect('customer')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Customer::findOrFail($id);
        $row->delete();

        return redirect('customer')->with('success', 'Data berhasil dihapus');
    }
}