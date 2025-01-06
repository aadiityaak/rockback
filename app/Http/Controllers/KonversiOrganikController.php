<?php

namespace App\Http\Controllers;

use App\Models\KonversiOrganik;
use Illuminate\Http\Request;

class KonversiOrganikController extends Controller
{
    public function index()
    {
        $konversi = KonversiOrganik::all();
        return response()->json($konversi);
    }

    public function show($id)
    {
        $konversi = KonversiOrganik::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }
        return response()->json($konversi);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'value' => 'required|string|max:114',
        ]);

        $konversi = KonversiOrganik::create($request->all());
        return response()->json($konversi, 201);
    }

    public function update(Request $request, $id)
    {
        $konversi = KonversiOrganik::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }

        $request->validate([
            'date' => 'sometimes|required|date',
            'value' => 'sometimes|required|string|max:114',
        ]);

        $konversi->update($request->all());
        return response()->json($konversi);
    }

    public function destroy($id)
    {
        $konversi = KonversiOrganik::find($id);
        if (!$konversi) {
            return response()->json(['message' => 'Konversi not found'], 404);
        }

        $konversi->delete();
        return response()->json(['message' => 'Konversi deleted successfully']);
    }
}