<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataPenggunaController extends Controller
{
    public function index(){
        $user = User::all();
        
        return view('data-pengguna', compact('user'));
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.data-pengguna.edit', compact('user'));
    }

    // Update data setelah form disubmit
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('data-pengguna.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('data-pengguna.index')->with('success', 'Data berhasil dihapus.');
    }
}
