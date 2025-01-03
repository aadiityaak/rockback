<?php

namespace App\Http\Controllers;

use App\Models\TrKeluarToro;
use Illuminate\Http\Request;

class TrKeluarToroController extends Controller
{
  public function index()
  {
    $transaksiKeluar = TrKeluarToro::all();
    return response()->json($transaksiKeluar);
  }

  public function show($id)
  {
    $transaksi = TrKeluarToro::find($id);
    if (!$transaksi) {
      return response()->json(['message' => 'Transaksi not found'], 404);
    }
    return response()->json($transaksi);
  }

  public function store(Request $request)
  {
    $request->validate([
      'tgl' => 'nullable|date',
      'jml' => 'nullable|numeric',
      'jenis' => 'nullable|string|max:50',
      'deskripsi' => 'nullable|string',
    ]);

    $transaksi = TrKeluarToro::create($request->all());
    return response()->json($transaksi, 201);
  }

  public function update(Request $request, $id)
  {
    $transaksi = TrKeluarToro::find($id);
    if (!$transaksi) {
      return response()->json(['message' => 'Transaksi not found'], 404);
    }

    $request->validate([
      'tgl' => 'sometimes|nullable|date',
      'jml' => 'sometimes|nullable|numeric',
      'jenis' => 'sometimes|nullable|string|max:50',
      'deskripsi' => 'sometimes|nullable|string',
    ]);

    $transaksi->update($request->all());
    return response()->json($transaksi);
  }

  public function destroy($id)
  {
    $transaksi = TrKeluarToro::find($id);
    if (!$transaksi) {
      return response()->json(['message' => 'Transaksi not found'], 404);
    }

    $transaksi->delete();
    return response()->json(['message' => 'Transaksi deleted successfully']);
  }
}
