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
        // Cek apakah tabel 'kepala_surat' belum ada sebelumnya
        if (!Schema::hasTable('kepala_surat')) {
            Schema::create('kepala_surat', function (Blueprint $table) {
                $table->id('id_kop');
                $table->string('nama_kop', 250);
                $table->text('alamat_kop');
                $table->string('nama_tujuan', 200);
                $table->timestamps();

                $table->primary(['id_kop']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Jika tabel 'kepala_surat' ada, drop tabel tersebut
        if (Schema::hasTable('kepala_surat')) {
            Schema::dropIfExists('kepala_surat');
        }
    }
};
