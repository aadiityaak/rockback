<?php

namespace App\Http\Controllers;

use App\Models\Konversi;
use Illuminate\Http\Request;

class KonversiController extends Controller
{
    public function index()
    {
        $konversi = Konversi::all();
        return response()->json($konversi);
    }

    public function show($id)
    {
        $konversi = Konversi::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }
        return response()->json($konversi);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'nullable|date',
            'value' => 'nullable|string|max:114',
        ]);

        $konversi = Konversi::create($request->all());
        return response()->json($konversi, 201);
    }

    public function update(Request $request, $id)
    {
        $konversi = Konversi::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }

        $request->validate([
            'date' => 'sometimes|nullable|date',
            'value' => 'sometimes|nullable|string|max:114',
        ]);

        $konversi->update($request->all());
        return response()->json($konversi);
    }

    public function destroy($id)
    {
        $konversi = Konversi::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }

        $konversi->delete();
        return response()->json(['message' => 'Konversi deleted successfully']);
    }
}