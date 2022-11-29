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
        Schema::create('lowkers', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('perusahaan');
            $table->string('email');
            $table->string('posisi_loker');
            $table->string('alamat');
            $table->string('kota');
            $table->string('lulusan');
            $table->string('waktu_k');
            $table->string('telp');
            $table->text('deskripsi');
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
        Schema::dropIfExists('lowkers');
    }
};
