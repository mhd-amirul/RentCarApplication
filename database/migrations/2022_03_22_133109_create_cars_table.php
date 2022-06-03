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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreignId('merk_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('tp_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('kf_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('km_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('mp_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('km2_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('jb_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('hs_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->integer('stok')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('kata_kunci')->nullable();
            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar4')->nullable();
            $table->string('gambar5')->nullable();
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
        Schema::dropIfExists('cars');
    }
};
