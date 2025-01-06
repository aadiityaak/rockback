<?php

namespace App\Http\Controllers;

use App\Models\Pembaruan;
use Illuminate\Http\Request;

class PembaruanController extends Controller
{
    public function index()
    {
        $pembaruan = Pembaruan::all();
        return response()->json($pembaruan);
    }

    public function show($id)
    {
        $pembaruan = Pembaruan::find($id);
        if (!$pembaruan) {
            return response()->json(['message' => 'Pembaruan not found'], 404);
        }
        return response()->json($pembaruan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_webhost' => 'required|integer',
            'tanggal' => 'required|string',
            'tanggal_masuk' => 'required|string',
            'status' => 'required|string',
        ]);

        $pembaruan = Pembaruan::create($request->all());
        return response()->json($pembaruan, 201);
    }

    public function update(Request $request, $id)
    {
        $pembaruan = Pembaruan::find($id);
        if (!$pembaruan) {
            return response()->json(['message' => 'Pembaruan not found'], 404);
        }

        $request->validate([
            'id_webhost' => 'sometimes|required|integer',
            'tanggal' => 'sometimes|required|string',
            'tanggal_masuk' => 'sometimes|required|string',
            'status' => 'sometimes|required|string',
        ]);

        $pembaruan->update($request->all());
        return response()->json($pembaruan);
    }

    public function destroy($id)
    {
        $pembaruan = Pembaruan::find($id);
        if (!$pembaruan) {
            return response()->json(['message' => 'Pembaruan not found'], 404);
        }

        $pembaruan->delete();
        return response()->json(['message' => 'Pembaruan deleted successfully']);
    }
}