<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilKaryawansTable extends Migration
{
    public function up()
    {
        Schema::create('profil_karyawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id')->constrained('karyawans');
            $table->string('alamat');
            $table->string('telepon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil_karyawans');
    }
}
