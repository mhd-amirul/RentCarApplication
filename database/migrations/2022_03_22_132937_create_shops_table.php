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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nm_pu');
            $table->string('nm_usaha');
            $table->string('alamat');
            $table->bigInteger('nik');
            $table->string('status')->default('nonactive');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('img_ktp')->nullable();
            $table->string('img_siu')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('foto_usaha')->nullable();
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
        Schema::dropIfExists('shops');
    }
};
