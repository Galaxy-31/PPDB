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
            $table->integer('nisn')->unique();
            $table->string('jk');
            $table->string('name');
            $table->string('asal_sekolah');
            $table->string('email')->unique();
            $table->bigInteger('no_tlp');
            $table->bigInteger('no_tlp_ibu');
            $table->bigInteger('no_tlp_ayah');
            $table->string('referensi');
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
