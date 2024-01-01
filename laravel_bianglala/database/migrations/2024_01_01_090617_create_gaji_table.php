<?php

// database/migrations/{timestamp}_create_gaji_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->date('jadwal_pengambilan');
            $table->enum('status', ['belum_diambil', 'diambil'])->default('belum_diambil');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gaji');
    }
}
