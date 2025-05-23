<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanSertifikat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_permohonan',
        'nama_lengkap',
        'nomor_hp',
        'nik',
        'no_kk',
        'sertifikat_asli',
        'akta_jual_beli',
        'surat_waris',
        'girik',
        'keterangan',
        'sppt_pbb',
        'denah_lokasi',
        'npwp',
        'surat_kuasa',
        'formulir_permohonan',
        'status',
    ];
}
