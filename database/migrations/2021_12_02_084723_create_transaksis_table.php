<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_jenis_laundry')->unsigned();
            $table->bigInteger('id_pelanggan')->unsigned();
            $table->bigInteger('id_karyawan')->unsigned();
            $table->integer('qty')->unsigned();
            $table->bigInteger('harga')->unsigned();
            $table->bigInteger('total_bayar')->unsigned();
            $table->date('tgl_cuci');
            $table->date('tgl_selesai');

            $table->foreign('id_jenis_laundry')->references('id')
                ->on('jenis_laundries')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id')
                ->on('pelanggans')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_karyawan')->references('id')
                ->on('karyawans')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
