<?php

namespace App\Http\Controllers;

use App\Models\Jenis_laundry;
use App\Models\Karyawan;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_laundry = Jenis_laundry::all();
        $pelanggan = Pelanggan::all();
        $karyawan = Karyawan::all();
        return view('transaksi.create', compact('jenis_laundry', 'pelanggan', 'karyawan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'id_jenis_laundry' => 'required',
        //     'id_pelanggan' => 'required',
        //     'qty' => 'required',
        //     'harga' => 'required',
        //     'total_bayar' => 'required',
        //     'tgl_cuci' => 'required',
        //     'tgl_selesai' => 'required',
        // ]);

        $transaksi = new Transaksi;
//DB            CREATE
        $transaksi->id_jenis_laundry = $request->id_jenis_laundry;
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->id_karyawan = $request->id_karyawan;
        $transaksi->qty = $request->qty;
        $transaksi->harga = $request->harga;
        $transaksi->total_bayar = $transaksi->harga * $transaksi->qty;
        $transaksi->tgl_cuci = $request->tgl_cuci;
        $transaksi->tgl_selesai = $request->tgl_selesai;

        $transaksi->save();
        return redirect()->route('transaksi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis_laundry = Jenis_laundry::all();
        $pelanggan = Pelanggan::all();
        $karyawan = Karyawan::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi', 'pelanggan', 'jenis_laundry', 'karyawan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_jenis_laundry' => 'required',
            'id_pelanggan' => 'required',
            'id_karyawan' => 'required',
            'qty' => 'required',
            'harga' => 'required',
            'total_bayar' => 'required',
            'tgl_cuci' => 'required',
            'tgl_selesai' => 'required',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_jenis_laundry = $request->id_jenis_laundry;
        $transaksi->id_pelanggan = $request->id_pelanggan;
        $transaksi->id_karyawan = $request->id_karyawan;
        $transaksi->qty = $request->qty;
        $transaksi->harga = $request->harga;
        $transaksi->total_bayar = $request->total_bayar;
        $transaksi->tgl_cuci = $request->tgl_cuci;
        $transaksi->tgl_selesai = $request->tgl_selesai;
        $transaksi->save();
        return redirect()->route('transaksi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');

    }
}
