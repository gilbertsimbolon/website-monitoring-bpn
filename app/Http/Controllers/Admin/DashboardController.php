<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PengajuanSertifikat;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            'user'       => User::count(),
            'proses'     => PengajuanSertifikat::where('status', 'proses')->count(),
            'verifikasi' => PengajuanSertifikat::where('status', 'verifikasi')->count(),
            'selesai'    => PengajuanSertifikat::where('status', 'selesai')->count(),
            'ditolak'    => PengajuanSertifikat::where('status', 'ditolak')->count(),
        ];

        return view('main.dashboard', compact('count'));
    }
}
