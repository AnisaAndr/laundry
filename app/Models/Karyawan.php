<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $visible = ['nama', 'alamat', 'no_hp'];
//memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nama', 'alamat', 'no_hp'];

    public $timestamp = true;
    // membuat relasi one to many
    public function transaksis()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_karyawan');
    }
}
