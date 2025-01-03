<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use Illuminate\Http\Request;

class SkorController extends Controller
{
    public function index()
    {
        $skors = Skor::all();
        return response()->json($skors);
    }

    public function show($id)
    {
        $skor = Skor::find($id);
        if (!$skor) {
            return response()->json(['message' => 'Skor not found'], 404);
        }
        return response()->json($skor);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer',
            'tgl' => 'nullable|date',
            'jumlah' => 'nullable|integer',
        ]);

        $skor = Skor::create($request->all());
        return response()->json($skor, 201);
    }

    public function update(Request $request, $id)
    {
        $skor = Skor::find($id);
        if (!$skor) {
            return response()->json(['message' => 'Skor not found'], 404);
        }

        $request->validate([
            'id' => 'sometimes|nullable|integer',
            'tgl' => 'sometimes|nullable|date',
            'jumlah' => 'sometimes|nullable|integer',
        ]);

        $skor->update($request->all());
        return response()->json($skor);
    }

    public function destroy($id)
    {
        $skor = Skor::find($id);
        if (!$skor) {
            return response()->json(['message' => 'Skor not found'], 404);
        }

        $skor->delete();
        return response()->json(['message' => 'Skor deleted successfully']);
    }
}