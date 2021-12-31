<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_laundry extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['jenis_laundry'];
//memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['jenis_laundry'];

    public $timestamp = true;
    // membuat relasi one to many
    public function transaksis()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_jenis_laundry');
    }
}
