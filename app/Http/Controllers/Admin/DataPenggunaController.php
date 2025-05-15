<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DataPenggunaController extends Controller
{
    public function index(){
        $user = User::all();

        return view('main.data-pengguna', compact('user'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'nullable|string|in:admin,pegawai',
        ]);

        $data = User::create($validated);

        return redirect()->back()->with(
            'success', 'Data berhasil ditambahkan.'
        );
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('main.data-pengguna', compact('user'));
    }

    // Update data setelah form disubmit
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('data.pengguna.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('data.pengguna.index')->with('success', 'Data berhasil dihapus.');
    }
}
