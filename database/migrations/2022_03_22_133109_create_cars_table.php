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
            $table->string('slug')->unique();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreignId('merk_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('Tahun_Produksi_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('Kondisi_Fisik_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('Kondisi_Mesin_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('Muatan_Penumpang_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('Kapasitas_Mesin_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('Jenis_BBM_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreignId('Harga_Sewa_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->enum('stok',['standby','onused'])->nullable();
            $table->string('no_polisi')->nullable();
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
