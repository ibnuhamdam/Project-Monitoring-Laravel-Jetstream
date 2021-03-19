<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketPekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('bidang');
            $table->string('namaPaket');
            $table->string('tahunPaket');
            $table->string('namaKonsultan');
            $table->string('paparan');
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
        Schema::dropIfExists('paket_pekerjaans');
    }
}
