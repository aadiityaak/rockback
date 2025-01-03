<?php

namespace App\Http\Controllers;

use App\Models\TransaksiMasuk;
use Illuminate\Http\Request;

class TransaksiMasukController extends Controller
{
  public function index()
  {
    $transaksiMasuk = TransaksiMasuk::all();
    return response()->json($transaksiMasuk);
  }

  public function show($id)
  {
    $transaksi = TransaksiMasuk::find($id);
    if (!$transaksi) {
      return response()->json(['message' => 'Transaksi not found'], 404);
    }
    return response()->json($transaksi);
  }

  public function store(Request $request)
  {
    $request->validate([
      'id' => 'nullable|integer',
      'tgl' => 'nullable|date',
      'total_biaya' => 'nullable|integer|unsigned',
      'bayar' => 'nullable|integer|unsigned',
      'pelunasan' => 'nullable|in:Y,N',
    ]);

    $transaksi = TransaksiMasuk::create($request->all());
    return response()->json($transaksi, 201);
  }

  public function update(Request $request, $id)
  {
    $transaksi = TransaksiMasuk::find($id);
    if (!$transaksi) {
      return response()->json(['message' => 'Transaksi not found'], 404);
    }

    $request->validate([
      'id' => 'sometimes|nullable|integer',
      'tgl' => 'sometimes|nullable|date',
      'total_biaya' => 'sometimes|nullable|integer|unsigned',
      'bayar' => 'sometimes|nullable|integer|unsigned',
      'pelunasan' => 'sometimes|nullable|in:Y,N',
    ]);

    $transaksi->update($request->all());
    return response()->json($transaksi);
  }

  public function destroy($id)
  {
    $transaksi = TransaksiMasuk::find($id);
    if (!$transaksi) {
      return response()->json(['message' => 'Transaksi not found'], 404);
    }

    $transaksi->delete();
    return response()->json(['message' => 'Transaksi deleted successfully']);
  }
}
