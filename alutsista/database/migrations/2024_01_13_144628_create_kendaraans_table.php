<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_seri');
            $table->string('tipe');
            $table->string('kapasitas');
            $table->string('ukuran');
            $table->string('berat');
            $table->string('kecepatan');
            $table->string('proteksi');
            $table->string('status');
            $table->string('pemilik');
            $table->string('sejarah');
            $table->string('pemakaian');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
