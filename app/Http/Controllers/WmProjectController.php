<?php

namespace App\Http\Controllers;

use App\Models\WmProject;
use Illuminate\Http\Request;

class WmProjectController extends Controller
{
  public function index()
  {
    $projects = WmProject::all();
    return response()->json($projects);
  }

  public function show($id)
  {
    $project = WmProject::find($id);
    if (!$project) {
      return response()->json(['message' => 'Project not found'], 404);
    }
    return response()->json($project);
  }

  public function store(Request $request)
  {
    $request->validate([
      'id_karyawan' => 'nullable|integer',
      'id' => 'nullable|integer',
      'start' => 'nullable|date',
      'stop' => 'nullable|date',
      'durasi' => 'nullable|numeric',
      'webmaster' => 'nullable|string',
      'date_mulai' => 'nullable|string',
      'date_selesai' => 'nullable|string',
      'qc' => 'nullable|string',
      'catatan' => 'nullable|string|max:128',
      'status_multi' => 'nullable|in:pending,selesai',
    ]);

    $project = WmProject::create($request->all());
    return response()->json($project, 201);
  }

  public function update(Request $request, $id)
  {
    $project = WmProject::find($id);
    if (!$project) {
      return response()->json(['message' => 'Project not found'], 404);
    }

    $request->validate([
      'id_karyawan' => 'sometimes|nullable|integer',
      'id' => 'sometimes|nullable|integer',
      'start' => 'sometimes|nullable|date',
      'stop' => 'sometimes|nullable|date',
      'durasi' => 'sometimes|nullable|numeric',
      'webmaster' => 'sometimes|nullable|string',
      'date_mulai' => 'sometimes|nullable|string',
      'date_selesai' => 'sometimes|nullable|string',
      'qc' => 'sometimes|nullable|string',
      'catatan' => 'sometimes|nullable|string|max:128',
      'status_multi' => 'sometimes|nullable|in:pending,selesai',
    ]);

    $project->update($request->all());
    return response()->json($project);
  }

  public function destroy($id)
  {
    $project = WmProject::find($id);
    if (!$project) {
      return response()->json(['message' => 'Project not found'], 404);
    }

    $project->delete();
    return response()->json(['message' => 'Project deleted successfully']);
  }
}
