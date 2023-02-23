<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembatalanTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembatalan_tikets', function (Blueprint $table) {
            $table->id('id_pembatalan');
            $table->foreignId('id');
            $table->foreignId('id_tiket');
            $table->foreignId('id_form_pemesan');
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
        Schema::dropIfExists('pembatalan_tikets');
    }
}
