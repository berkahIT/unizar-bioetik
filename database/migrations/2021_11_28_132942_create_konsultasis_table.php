<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->foreignId('konselor_id');
            $table->boolean('rekam_medik')->default(false);
            $table->integer('rekam_medik_id')->nullable();
            $table->string('jenis_konsultasi');
            $table->string('status')->default('pending');
            $table->date('tanggal');
            $table->string('photo_rekam_medik')->default('kosong');
            $table->time('jam');
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
        Schema::dropIfExists('konsultasis');
    }
}
