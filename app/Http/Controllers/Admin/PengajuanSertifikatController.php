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

    public function store(Request $request)
    {
        // Validasi input
        $validate = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomor_hp' => 'required|string|min:11|max:15',
            'nik' => 'required|string|min:12|max:20',
            'no_kk' => 'required|string|min:12|max:20',
            'sertifikasi_asli' => 'nullable|string',
            'akta_jual_beli' => 'nullable|string',
            'surat_waris' => 'nullable|string',
            'girik' => 'nullable|string',
            'keterangan' => 'nullable|string',
            'sppt_pbb' => 'nullable|string',
            'denah_lokasi' => 'required|string',
            'npwp' => 'nullable|string',
            'surat_kuasa' => 'nullable|string',
            'formulir_permohonan' => 'required|string',
            'status' => 'required|in:proses,verifikasi,selesai',
        ]);

        // Generate nomor permohonan unik
        $validate['nomor_permohonan'] = 'PMHN-' . now()->format('YmdHis') . '-' . rand(100, 999);

        // Simpan ke database
        $data = PengajuanSertifikat::create($validate);

        return redirect()->back()->with('success', 'Permohonan berhasil diajukan. Nomor Permohonan Anda: ' . $validate['nomor_permohonan']);
    }
}
