<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        return response()->json($themes);
    }

    public function show($id)
    {
        $theme = Theme::find($id);
        if (!$theme) {
            return response()->json(['message' => 'Theme not found'], 404);
        }
        return response()->json($theme);
    }

    public function store(Request $request)
    {
        $request->validate([
            'domain' => 'required|string',
            'desain' => 'required|string',
            'tanggal' => 'required|string',
        ]);

        $theme = Theme::create($request->all());
        return response()->json($theme, 201);
    }

    public function update(Request $request, $id)
    {
        $theme = Theme::find($id);
        if (!$theme) {
            return response()->json(['message' => 'Theme not found'], 404);
        }

        $request->validate([
            'domain' => 'sometimes|nullable|string',
            'desain' => 'sometimes|nullable|string',
            'tanggal' => 'sometimes|nullable|string',
        ]);

        $theme->update($request->all());
        return response()->json($theme);
    }

    public function destroy($id)
    {
        $theme = Theme::find($id);
        if (!$theme) {
            return response()->json(['message' => 'Theme not found'], 404);
        }

        $theme->delete();
        return response()->json(['message' => 'Theme deleted successfully']);
    }
}