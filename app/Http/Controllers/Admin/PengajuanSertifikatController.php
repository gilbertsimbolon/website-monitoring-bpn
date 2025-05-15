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
}
