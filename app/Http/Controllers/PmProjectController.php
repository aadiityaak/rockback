<?php

namespace App\Http\Controllers;

use App\Models\PmProject;
use Illuminate\Http\Request;

class PmProjectController extends Controller
{
    public function index()
    {
        $projects = PmProject::all();
        return response()->json($projects);
    }

    public function show($id)
    {
        $project = PmProject::find($id);
        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }
        return response()->json($project);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer',
            'konfirm_revisi_1' => 'nullable|string',
            'fr1' => 'nullable|string',
            'tutorial_password' => 'nullable|date',
            'selesai' => 'nullable|date',
        ]);

        $project = PmProject::create($request->all());
        return response()->json($project, 201);
    }

    public function update(Request $request, $id)
    {
        $project = PmProject::find($id);
        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $request->validate([
            'id' => 'sometimes|nullable|integer',
            'konfirm_revisi_1' => 'sometimes|nullable|string',
            'fr1' => 'sometimes|nullable|string',
            'tutorial_password' => 'sometimes|nullable|date',
            'selesai' => 'sometimes|nullable|date',
        ]);

        $project->update($request->all());
        return response()->json($project);
    }

    public function destroy($id)
    {
        $project = PmProject::find($id);
        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $project->delete();
        return response()->json(['message' => 'Project deleted successfully']);
    }
}