<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['name', 'id_jenis_laundry', 'id_pelanggan', 'qty', 'harga', 'total_bayar', 'tgl_cuci', 'tgl_selesai'];
//memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['name', 'id_jenis_laundry', 'id_pelanggan', 'qty', 'harga', 'total_bayar', 'tgl_cuci', 'tgl_selesai'];

    public $timestamp = true;
    // membuat relasi one to many
    public function pelanggans()
    {
        return $this->belongsTo('App\Models\Pelanggan', 'id_pelanggan');
    }
    public function jenis_laundries()
    {
        return $this->belongsTo('App\Models\Jenis_laundry', 'id_jenis_laundry');
    }
    public function karyawans()
    {
        return $this->belongsTo('App\Models\Karyawan', 'id_karyawan');
    }
}
