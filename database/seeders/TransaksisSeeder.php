<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class TransaksisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pelanggan = Pelanggan::create(['nama' => 'Astri Pitriana', 'alamat' => 'Bandung', 'no_hp' => '0895422697346', 'jk' => 'Perempuan']);

        $jenis = Jenis::create(['jenis_laundry' => 'Hanya Cuci']);

        $transaksi = Transaksi::create(['id_jenis_laundry' => $jenis->id,
            'id_pelanggan' => $pelanggan1->id, 'qty' => 2, 'harga' => 8000, 'total_bayar' => 8000, 'tgl_cuci' => '2021-08-23', 'tgl_selesai' => '2021-08-25']);

    }
}
