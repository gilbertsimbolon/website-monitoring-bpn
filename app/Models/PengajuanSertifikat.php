<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanSertifikat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'no_hp',
        'alamat',
        'jenis_sertifikat',
        'lokasi_tanah',
        'luas_tanah',
        'status',
    ];
}
