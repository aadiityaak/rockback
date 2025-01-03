<?php

namespace App\Http\Controllers;

use App\Models\Webhost;
use Illuminate\Http\Request;

class WebhostController extends Controller
{
  public function index()
  {
    $webhosts = Webhost::all();
    return response()->json($webhosts);
  }

  public function show($id)
  {
    $webhost = Webhost::find($id);
    if (!$webhost) {
      return response()->json(['message' => 'Webhost not found'], 404);
    }
    return response()->json($webhost);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama_web' => 'nullable|string|max:64',
      'id_paket' => 'nullable|string',
      'tgl_mulai' => 'nullable|date',
      'id_server2' => 'nullable|integer',
      'id_server' => 'required|integer',
      'space' => 'nullable|integer',
      'space_use' => 'nullable|integer',
      'hp' => 'nullable|string|max:64',
      'telegram' => 'nullable|string|max:64',
      'hpads' => 'nullable|string',
      'wa' => 'nullable|string|max:64',
      'email' => 'nullable|string|max:200',
      'tgl_exp' => 'nullable|date',
      'tgl_update' => 'nullable|date',
      'server_luar' => 'nullable|in:0,1',
      'saldo' => 'nullable|string',
      'kategori' => 'nullable|string',
      'waktu' => 'nullable|date',
      'via' => 'nullable|string',
      'konfirmasi_order' => 'required|string',
      'kata_kunci' => 'nullable|string',
      'jenis_kelamin' => 'nullable|string',
      'usia' => 'nullable|integer',
    ]);

    $webhost = Webhost::create($request->all());
    return response()->json($webhost, 201);
  }

  public function update(Request $request, $id)
  {
    $webhost = Webhost::find($id);
    if (!$webhost) {
      return response()->json(['message' => 'Webhost not found'], 404);
    }

    $request->validate([
      'nama_web' => 'sometimes|nullable|string|max:64',
      'id_paket' => 'sometimes|nullable|string',
      'tgl_mulai' => 'sometimes|nullable|date',
      'id_server2' => 'sometimes|nullable|integer',
      'id_server' => 'sometimes|nullable|integer',
      'space' => 'sometimes|nullable|integer',
      'space_use' => 'sometimes|nullable|integer',
      'hp' => 'sometimes|nullable|string|max:64',
      'telegram' => 'sometimes|nullable|string|max:64',
      'hpads' => 'sometimes|nullable|string',
      'wa' => 'sometimes|nullable|string|max:64',
      'email' => 'sometimes|nullable|string|max:200',
      'tgl_exp' => 'sometimes|nullable|date',
      'tgl_update' => 'sometimes|nullable|date',
      'server_luar' => 'sometimes|nullable|in:0,1',
      'saldo' => 'sometimes|nullable|string',
      'kategori' => 'sometimes|nullable|string',
      'waktu' => 'sometimes|nullable|date',
      'via' => 'sometimes|nullable|string',
      'konfirmasi_order' => 'sometimes|nullable|string',
      'kata_kunci' => 'sometimes|nullable|string',
      'jenis_kelamin' => 'sometimes|nullable|string',
      'usia' => 'sometimes|nullable|integer',
    ]);

    $webhost->update($request->all());
    return response()->json($webhost);
  }

  public function destroy($id)
  {
    $webhost = Webhost::find($id);
    if (!$webhost) {
      return response()->json(['message' => 'Webhost not found'], 404);
    }

    $webhost->delete();
    return response()->json(['message' => 'Webhost deleted successfully']);
  }
}
