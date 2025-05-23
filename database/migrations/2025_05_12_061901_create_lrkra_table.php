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
        Schema::create('lrkra', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan_benahi');
            $table->string('implementasi_kegiatan');
            $table->string('kegiatan_arkas');
            $table->text('uraian_kegiatan_arkas');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->integer('total');
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
        Schema::dropIfExists('lrkra');
    }
};
