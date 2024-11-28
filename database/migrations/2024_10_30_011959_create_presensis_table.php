<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nis', 20);
            $table->enum('gender', ['B', 'G']);
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->date('tanggal');
            $table->enum('status_kehadiran', ['Hadir', 'Sakit', 'Izin', 'Alpa']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('presensis');
    }
};