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
        Schema::create('tb_asets', function (Blueprint $table) {
            $table->id();
            $table->string('no_sertifikat');
            $table->string('alamat_aset');
            $table->string('luas_aset');
            $table->string('status_aset');
            $table->string('kondisi_das');
            $table->string('kondisi_geografis');
            $table->string('asalusul_aset');
            $table->string('th_kepemilikam');
            $table->string('th_pembangunan');
            $table->string('th_rehab');
            $table->string('keterangan');
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
        Schema::dropIfExists('tb_asets');
    }
};
