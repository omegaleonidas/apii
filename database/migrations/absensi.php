<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class absensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_absensi', function (Blueprint $table) {
            $table->increment('id_absensi');
            $table->int('nip');
            $table->date('tanggal');
            $table->text('jam_masuk'); 
            $table->String('jam_selesai') ->nullable();
            $table->text('alamat');
            $table->text('keterangan');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_absensi');
    }
}
