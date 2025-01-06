<?php

namespace App\Http\Controllers;

use App\Models\HargaDomain;
use Illuminate\Http\Request;

class HargaDomainController extends Controller
{
    public function index()
    {
        $hargaDomain = HargaDomain::all();
        return response()->json($hargaDomain);
    }

    public function show($id)
    {
        $hargaDomain = HargaDomain::find($id);
        if (!$hargaDomain) {
            return response()->json(['message' => 'Harga Domain not found'], 404);
        }
        return response()->json($hargaDomain);
    }

    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'required|string',
            'biaya' => 'required|string',
        ]);

        $hargaDomain = HargaDomain::create($request->all());
        return response()->json($hargaDomain, 201);
    }

    public function update(Request $request, $id)
    {
        $hargaDomain = HargaDomain::find($id);
        if (!$hargaDomain) {
            return response()->json(['message' => 'Harga Domain not found'], 404);
        }

        $request->validate([
            'bulan' => 'sometimes|required|string',
            'biaya' => 'sometimes|required|string',
        ]);

        $hargaDomain->update($request->all());
        return response()->json($hargaDomain);
    }

    public function destroy($id)
    {
        $hargaDomain = HargaDomain::find($id);
        if (!$hargaDomain) {
            return response()->json(['message' => 'Harga Domain not found'], 404);
        }

        $hargaDomain->delete();
        return response()->json(['message' => 'Harga Domain deleted successfully']);
    }
}