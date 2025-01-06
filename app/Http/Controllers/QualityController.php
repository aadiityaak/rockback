<?php

namespace App\Http\Controllers;

use App\Models\Quality;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index()
    {
        $qualities = Quality::all();
        return response()->json($qualities);
    }

    public function show($id)
    {
        $quality = Quality::find($id);
        if (!$quality) {
            return response()->json(['message' => 'Quality not found'], 404);
        }
        return response()->json($quality);
    }

    public function store(Request $request)
    {
        $request->validate([
            'detail' => 'nullable|string',
        ]);

        $quality = Quality::create($request->all());
        return response()->json($quality, 201);
    }

    public function update(Request $request, $id)
    {
        $quality = Quality::find($id);
        if (!$quality) {
            return response()->json(['message' => 'Quality not found'], 404);
        }

        $request->validate([
            'detail' => 'sometimes|nullable|string',
        ]);

        $quality->update($request->all());
        return response()->json($quality);
    }

    public function destroy($id)
    {
        $quality = Quality::find($id);
        if (!$quality) {
            return response()->json(['message' => 'Quality not found'], 404);
        }

        $quality->delete();
        return response()->json(['message' => 'Quality deleted successfully']);
    }
}