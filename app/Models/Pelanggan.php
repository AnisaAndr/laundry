<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nama', 'alamat', 'no_hp', 'jk'];
//memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nama', 'alamat', 'no_hp', 'jk'];

    public $timestamp = true;
    // membuat relasi one to many
    public function transaksis()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_pelanggan');
    }
}
