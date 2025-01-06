<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnal = Jurnal::all();
        return response()->json($jurnal);
    }

    public function show($id)
    {
        $jurnal = Jurnal::find($id);
        if (!$jurnal) {
            return response()->json(['message' => 'Jurnal not found'], 404);
        }
        return response()->json($jurnal);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|string',
            'data' => 'required|string',
            'file' => 'required|string',
        ]);

        $jurnal = Jurnal::create($request->all());
        return response()->json($jurnal, 201);
    }

    public function update(Request $request, $id)
    {
        $jurnal = Jurnal::find($id);
        if (!$jurnal) {
            return response()->json(['message' => 'Jurnal not found'], 404);
        }

        $request->validate([
            'tanggal' => 'sometimes|required|string',
            'data' => 'sometimes|required|string',
            'file' => 'sometimes|required|string',
        ]);

        $jurnal->update($request->all());
        return response()->json($jurnal);
    }

    public function destroy($id)
    {
        $jurnal = Jurnal::find($id);
        if (!$jurnal) {
            return response()->json(['message' => 'Jurnal not found'], 404);
        }

        $jurnal->delete();
        return response()->json(['message' => 'Jurnal deleted successfully']);
    }
}