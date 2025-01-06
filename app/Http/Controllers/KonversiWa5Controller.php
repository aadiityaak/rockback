<?php

namespace App\Http\Controllers;

use App\Models\KonversiWa5;
use Illuminate\Http\Request;

class KonversiWa5Controller extends Controller
{
    public function index()
    {
        $konversi = KonversiWa5::all();
        return response()->json($konversi);
    }

    public function show($id)
    {
        $konversi = KonversiWa5::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }
        return response()->json($konversi);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'value' => 'required|string|max:144',
        ]);

        $konversi = KonversiWa5::create($request->all());
        return response()->json($konversi, 201);
    }

    public function update(Request $request, $id)
    {
        $konversi = KonversiWa5::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }

        $request->validate([
            'date' => 'sometimes|required|date',
            'value' => 'sometimes|required|string|max:144',
        ]);

        $konversi->update($request->all());
        return response()->json($konversi);
    }

    public function destroy($id)
    {
        $konversi = KonversiWa5::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }

        $konversi->delete();
        return response()->json(['message' => 'Konversi deleted successfully']);
    }
}