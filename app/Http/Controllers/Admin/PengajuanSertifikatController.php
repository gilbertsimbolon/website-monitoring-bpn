<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSertifikat;
use Illuminate\Http\Request;

class PengajuanSertifikatController extends Controller
{
    public function index()
    {
        $data = PengajuanSertifikat::all();
        return view('main.pengajuan-sertifikat', compact('data'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validate = $request->validate([
            'nama_lengkap'         => 'required|string|max:255',
            'nomor_hp'             => 'required|string|min:11|max:15',
            'nik'                  => 'required|string|min:12|max:20',
            'no_kk'                => 'required|string|min:12|max:20',
            'npwp'                 => 'nullable|string',
            'denah_lokasi'         => 'required|string',
            'formulir_permohonan'  => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'sertifikasi_asli'     => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'akta_jual_beli'       => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'surat_waris'          => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'girik'                => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'sppt_pbb'             => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'surat_kuasa'          => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'keterangan'           => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Pastikan npwp tidak null
        $validate['npwp'] = $request->input('npwp') ?? '';

        // Nama-nama field file
        $fieldsWithFiles = [
            'sertifikasi_asli',
            'akta_jual_beli',
            'surat_waris',
            'girik',
            'sppt_pbb',
            'surat_kuasa',
            'formulir_permohonan',
            'keterangan'
        ];

        // Upload file jika ada, jika tidak isi null
        foreach ($fieldsWithFiles as $field) {
            if ($request->hasFile($field)) {
                $validate[$field] = $request->file($field)->store('dokumen', 'public');
            } else {
                $validate[$field] = null;
            }
        }

        // Tambahan otomatis
        $validate['nomor_permohonan'] = 'P-' . now()->format('YmdHis') . rand(100, 999);
        $validate['status'] = 'proses';

        // Simpan ke database
        PengajuanSertifikat::create($validate);

        return redirect()->back()->with([
            'success'           => true,
            'nama_lengkap'      => $validate['nama_lengkap'],
            'nomor_permohonan'  => $validate['nomor_permohonan'],
        ]);
    }

    public function download($field, $filename)
    {
        // Daftar field yang diperbolehkan
        $allowedFields = [
            'sertifikasi_asli',
            'akta_jual_beli',
            'surat_waris',
            'girik',
            'sppt_pbb',
            'surat_kuasa',
            'formulir_permohonan',
            'keterangan',
        ];

        if (!in_array($field, $allowedFields)) {
            abort(404);
        }

        // Path file di storage/app/public/dokumen/
        $filePath = storage_path('app/public/dokumen/' . $filename);

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath);
    }
}
