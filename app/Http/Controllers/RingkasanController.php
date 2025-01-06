<?php

namespace App\Http\Controllers;

use App\Models\Ringkasan;
use Illuminate\Http\Request;

class RingkasanController extends Controller
{
    public function index()
    {
        $ringkasan = Ringkasan::all();
        return response()->json($ringkasan);
    }

    public function show($id)
    {
        $ringkasan = Ringkasan::find($id);
        if (!$ringkasan) {
            return response()->json(['message' => 'Ringkasan not found'], 404);
        }
        return response()->json($ringkasan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'nullable|string|max:20',
            'laba_akuntansi' => 'nullable|integer',
            'zakat' => 'nullable|integer',
            'shodaqoh' => 'nullable|integer',
        ]);

        $ringkasan = Ringkasan::create($request->all());
        return response()->json($ringkasan, 201);
    }

    public function update(Request $request, $id)
    {
        $ringkasan = Ringkasan::find($id);
        if (!$ringkasan) {
            return response()->json(['message' => 'Ringkasan not found'], 404);
        }

        $request->validate([
            'bulan' => 'sometimes|nullable|string|max:20',
            'laba_akuntansi' => 'sometimes|nullable|integer',
            'zakat' => 'sometimes|nullable|integer',
            'shodaqoh' => 'sometimes|nullable|integer',
        ]);

        $ringkasan->update($request->all());
        return response()->json($ringkasan);
    }

    public function destroy($id)
    {
        $ringkasan = Ringkasan::find($id);
        if (!$ringkasan) {
            return response()->json(['message' => 'Ringkasan not found'], 404);
        }

        $ringkasan->delete();
        return response()->json(['message' => 'Ringkasan deleted successfully']);
    }
}