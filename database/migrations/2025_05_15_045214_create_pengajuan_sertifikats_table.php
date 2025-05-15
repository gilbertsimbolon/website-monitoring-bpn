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
            $table->string('nomor_permohonan');
            $table->string('nama_lengkap');
            $table->string('nomor_hp');
            $table->string('nik');
            $table->text('no_kk');
            $table->string('sertifikat_asli')->nullable();
            $table->string('akta_jual_beli')->nullable();
            $table->string('surat_waris')->nullable();
            $table->string('girik')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('sppt_pbb')->nullable();
            $table->string('denah_lokasi');
            $table->string('npwp')->nullable();
            $table->string('surat_kuasa')->nullable();
            $table->string('formulir_permohonan');
            $table->enum('status', ['proses', 'verifikasi', 'selesai', 'ditolak'])->default('proses');
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
