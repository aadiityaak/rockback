<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
  public function index()
  {
    $cutis = Cuti::all();
    return response()->json($cutis);
  }

  public function show($id)
  {
    $cuti = Cuti::find($id);
    if (!$cuti) {
      return response()->json(['message' => 'Cuti not found'], 404);
    }
    return response()->json($cuti);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'nullable|string',
      'tanggal' => 'nullable|string|max:114',
      'jenis' => 'nullable|string|max:114',
      'time' => 'nullable|string|max:48',
      'tipe' => 'nullable|string|max:48',
      'detail' => 'nullable|string',
    ]);

    $cuti = Cuti::create($request->all());
    return response()->json($cuti, 201);
  }

  public function update(Request $request, $id)
  {
    $cuti = Cuti::find($id);
    if (!$cuti) {
      return response()->json(['message' => 'Cuti not found'], 404);
    }

    $request->validate([
      'nama' => 'sometimes|nullable|string',
      'tanggal' => 'sometimes|nullable|string|max:114',
      'jenis' => 'sometimes|nullable|string|max:114',
      'time' => 'sometimes|nullable|string|max:48',
      'tipe' => 'sometimes|nullable|string|max:48',
      'detail' => 'sometimes|nullable|string',
    ]);

    $cuti->update($request->all());
    return response()->json($cuti);
  }

  public function destroy($id)
  {
    $cuti = Cuti::find($id);
    if (!$cuti) {
      return response()->json(['message' => 'Cuti not found'], 404);
    }

    $cuti->delete();
    return response()->json(['message' => 'Cuti deleted successfully']);
  }
}
