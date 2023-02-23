<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormPemesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_pemesans', function (Blueprint $table) {
            $table->id('id_pemesan');
            $table->foreignId('id');
            $table->foreignId('id_tiket');
            $table->date('tanggal_pesan_tiket');
            $table->integer('jumlah_tiket');
            $table->integer('total_harga');
            $table->enum('cara_pembayaran', ['transfer', 'cash'])->nullable()->default('transfer');
            $table->enum('konfirmasi', ['lunas', 'belum'])->nullable()->default('belum');
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
        Schema::dropIfExists('form_pemesans');
    }
}
