<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->string('nama_pinjam');
            $table->string('nik_pinjam');
            $table->dateTime('tgl_pinjam');
            $table->dateTime('batas_pinjam');
            $table->string('berkas_pinjam')->nullable();
            $table->enum('status',['on', 'off', 'late']);
            $table->foreignId('car_id')->references('id')->on('cars');
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
        Schema::dropIfExists('histories');
    }
};
