<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    public function index()
    {
        $keywords = Keyword::all();
        return response()->json($keywords);
    }

    public function show($id)
    {
        $keyword = Keyword::find($id);
        if (!$keyword) {
            return response()->json(['message' => 'Keyword not found'], 404);
        }
        return response()->json($keyword);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kata_kunci' => 'nullable|string',
            'biaya' => 'nullable|integer',
            'bulan' => 'nullable|string',
        ]);

        $keyword = Keyword::create($request->all());
        return response()->json($keyword, 201);
    }

    public function update(Request $request, $id)
    {
        $keyword = Keyword::find($id);
        if (!$keyword) {
            return response()->json(['message' => 'Keyword not found'], 404);
        }

        $request->validate([
            'kata_kunci' => 'sometimes|nullable|string',
            'biaya' => 'sometimes|nullable|integer',
            'bulan' => 'sometimes|nullable|string',
        ]);

        $keyword->update($request->all());
        return response()->json($keyword);
    }

    public function destroy($id)
    {
        $keyword = Keyword::find($id);
        if (!$keyword) {
            return response()->json(['message' => 'Keyword not found'], 404);
        }

        $keyword->delete();
        return response()->json(['message' => 'Keyword deleted successfully']);
    }
}