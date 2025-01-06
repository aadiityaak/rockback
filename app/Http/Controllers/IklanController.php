<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    public function index()
    {
        $iklan = Iklan::all();
        return response()->json($iklan);
    }

    public function show($id)
    {
        $iklan = Iklan::find($id);
        if (!$iklan) {
            return response()->json(['message' => 'Iklan not found'], 404);
        }
        return response()->json($iklan);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_web' => 'nullable|string',
            'kontak' => 'nullable|string',
            'paket' => 'nullable|string',
            'tanggal' => 'nullable|string',
            'via' => 'nullable|string',
            'chat_pertama' => 'nullable|string',
        ]);

        $iklan = Iklan::create($request->all());
        return response()->json($iklan, 201);
    }

    public function update(Request $request, $id)
    {
        $iklan = Iklan::find($id);
        if (!$iklan) {
            return response()->json(['message' => 'Iklan not found'], 404);
        }

        $request->validate([
            'nama_web' => 'sometimes|nullable|string',
            'kontak' => 'sometimes|nullable|string',
            'paket' => 'sometimes|nullable|string',
            'tanggal' => 'sometimes|nullable|string',
            'via' => 'sometimes|nullable|string',
            'chat_pertama' => 'sometimes|nullable|string',
        ]);

        $iklan->update($request->all());
        return response()->json($iklan);
    }

    public function destroy($id)
    {
        $iklan = Iklan::find($id);
        if (!$iklan) {
            return response()->json(['message' => 'Iklan not found'], 404);
        }

        $iklan->delete();
        return response()->json(['message' => 'Iklan deleted successfully']);
    }
}