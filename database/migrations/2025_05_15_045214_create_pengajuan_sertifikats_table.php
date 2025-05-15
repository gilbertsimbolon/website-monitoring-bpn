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
        Schema::create('pengajuan_sertifikats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('nik');
            $table->text('no_kk');
            $table->string('sertifikat_asli');
            $table->string('akta_jual_beli');
            $table->string('surat_waris');
            $table->string('girik');
            $table->string('keterangan');
            $table->string('sppt_pbb');
            $table->string('denah_lokasi');
            $table->string('npwp');
            $table->string('surat_kuasa');
            $table->string('formulir_permohonan');
            $table->enum('status', ['proses', 'verifikasi', 'selesai'])->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_sertifikats');
    }
};
