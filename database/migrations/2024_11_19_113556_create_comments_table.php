<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment'); // Kolom untuk komentar
            $table->string('user_name'); // Nama pengguna (opsional)
            $table->timestamps(); // Untuk menyimpan waktu
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}