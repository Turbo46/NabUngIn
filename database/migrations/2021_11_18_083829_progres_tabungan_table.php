<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgresTabunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progres_tabungan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unique();
            $table->integer('no_rekening')->unique();
            $table->integer('nominal');
            $table->integer('tersimpan');
            $table->integer('terpakai_bulan_ini');
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
        Schema::dropIfExists('progres_tabungan');
    }
}
