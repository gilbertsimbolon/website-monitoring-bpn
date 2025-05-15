<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSertifikat;
use Illuminate\Http\Request;

class PengajuanSertifikatController extends Controller
{
    public function index () {
        $data = PengajuanSertifikat::all();

        return view('main.pengajuan-sertifikat', compact('data'));
    }

    public function store (Request $request) {
        $validate = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomor_hp' => 'required|string|min:11',
            'nik' => 'required|string|min:12',
            'no_kk' => 'required|string|min:12',
            'sertifikasi_asli' => ''
        ]);
    }
}
