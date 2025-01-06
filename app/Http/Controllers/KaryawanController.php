<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return response()->json($karyawan);
    }

    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        if (!$karyawan) {
            return response()->json(['message' => 'Karyawan not found'], 404);
        }
        return response()->json($karyawan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'nullable|string|max:128',
            'hp' => 'nullable|string|max:24',
            'wa' => 'nullable|string|max:24',
            'bb' => 'nullable|string|max:24',
            'email' => 'nullable|string|email|max:64',
            'alamat' => 'nullable|string|max:128',
            'tgl_masuk' => 'nullable|date',
            'username' => 'nullable|string|max:60|unique:tb_karyawan,username',
            'password' => 'nullable|string|min:8',
            'jenis' => 'nullable|in:finance,webmaster,project_manager,billing,client_support,superadmin,pemilik,keuangan',
        ]);

        $karyawan = Karyawan::create($request->all());
        return response()->json($karyawan, 201);
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
        if (!$karyawan) {
            return response()->json(['message' => 'Karyawan not found'], 404);
        }

        $request->validate([
            'nama' => 'sometimes|nullable|string|max:128',
            'hp' => 'sometimes|nullable|string|max:24',
            'wa' => 'sometimes|nullable|string|max:24',
            'bb' => 'sometimes|nullable|string|max:24',
            'email' => 'sometimes|nullable|string|email|max:64',
            'alamat' => 'sometimes|nullable|string|max:128',
            'tgl_masuk' => 'sometimes|nullable|date',
            'username' => 'sometimes|nullable|string|max:60|unique:tb_karyawan,username,' . $id . ',id_karyawan',
            'password' => 'sometimes|nullable|string|min:8',
            'jenis' => 'sometimes|nullable|in:finance,webmaster,project_manager,billing,client_support,superadmin,pemilik,keuangan',
        ]);

        $karyawan->update($request->all());
        return response()->json($karyawan);
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        if (!$karyawan) {
            return response()->json(['message' => 'Karyawan not found'], 404);
        }

        $karyawan->delete();
        return response()->json(['message' => 'Karyawan deleted successfully']);
    }
}