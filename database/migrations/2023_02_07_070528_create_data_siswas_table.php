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
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->integer('jk');
            $table->integer('name');
            $table->integer('asal_sekolah');
            $table->integer('email')->unique();
            $table->integer('no_tlp');
            $table->integer('no_tlp_ibu');
            $table->integer('no_tlp_ayah');
            $table->integer('referensi');
            $table->integer('password');
            $table->integer('jurusan');
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
        Schema::dropIfExists('data_siswas');
    }
};
