<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MimpiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mimpi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_mimpi')->unique();
            $table->integer('biaya');
            $table->string('nama_mimpi');
            $table->enum('aktifitas',['aktif','selesai','terhapus']);
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
        Schema::dropIfExists('mimpi');
    }
}
