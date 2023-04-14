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
        Schema::create('surat_observasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable(false);
            $table->string('npm')->nullable(false);
            $table->string('kelas')->nullable(false);
            $table->string('prodi')->nullable(false);
            $table->string('judul')->nullable(false);
            $table->string('ditujukan')->nullable(false);
            $table->string('tempat')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_observasis');
    }
};
