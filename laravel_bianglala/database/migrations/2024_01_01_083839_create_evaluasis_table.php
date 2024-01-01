<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluasisTable extends Migration
{
    public function up()
    {
        Schema::create('evaluasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->text('catatan');
            $table->enum('rating', ['bagus', 'cukup', 'buruk']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluasis');
    }
}
