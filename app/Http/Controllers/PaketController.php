<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
  public function index()
  {
    $pakets = Paket::all();
    return response()->json($pakets);
  }

  public function show($id)
  {
    $paket = Paket::find($id);
    if (!$paket) {
      return response()->json(['message' => 'Paket not found'], 404);
    }
    return response()->json($paket);
  }

  public function store(Request $request)
  {
    $request->validate([
      'paket' => 'required|string|max:64',
      'bobot' => 'required|integer',
    ]);

    $paket = Paket::create($request->all());
    return response()->json($paket, 201);
  }

  public function update(Request $request, $id)
  {
    $paket = Paket::find($id);
    if (!$paket) {
      return response()->json(['message' => 'Paket not found'], 404);
    }

    $request->validate([
      'paket' => 'sometimes|string|max:64',
      'bobot' => 'sometimes|integer',
    ]);

    $paket->update($request->all());
    return response()->json($paket);
  }

  public function destroy($id)
  {
    $paket = Paket::find($id);
    if (!$paket) {
      return response()->json(['message' => 'Paket not found'], 404);
    }

    $paket->delete();
    return response()->json(['message' => 'Paket deleted successfully']);
  }
}
