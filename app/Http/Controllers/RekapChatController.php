<?php

namespace App\Http\Controllers;

use App\Models\RekapChat;
use Illuminate\Http\Request;

class RekapChatController extends Controller
{
    public function index()
    {
        $rekapChat = RekapChat::all();
        return response()->json($rekapChat);
    }

    public function show($id)
    {
        $rekap = RekapChat::find($id);
        if (!$rekap) {
            return response()->json(['message' => 'Rekap not found'], 404);
        }
        return response()->json($rekap);
    }

    public function store(Request $request)
    {
        $request->validate([
            'whatsapp' => 'nullable|string|max:114',
            'chat_pertama' => 'nullable|date',
            'via' => 'nullable|string|max:114',
            'alasan' => 'nullable|string|max:250',
            'detail' => 'nullable|string',
            'kata_kunci' => 'nullable|string',
            'tanggal_followup' => 'nullable|string',
            'status_followup' => 'nullable|string|max:114',
        ]);

        $rekap = RekapChat::create($request->all());
        return response()->json($rekap, 201);
    }

    public function update(Request $request, $id)
    {
        $rekap = RekapChat::find($id);
        if (!$rekap) {
            return response()->json(['message' => 'Rekap not found'], 404);
        }

        $request->validate([
            'whatsapp' => 'sometimes|nullable|string|max:114',
            'chat_pertama' => 'sometimes|nullable|date',
            'via' => 'sometimes|nullable|string|max:114',
            'alasan' => 'sometimes|nullable|string|max:250',
            'detail' => 'sometimes|nullable|string',
            'kata_kunci' => 'sometimes|nullable|string',
            'tanggal_followup' => 'sometimes|nullable|string',
            'status_followup' => 'sometimes|nullable|string|max:114',
        ]);

        $rekap->update($request->all());
        return response()->json($rekap);
    }

    public function destroy($id)
    {
        $rekap = RekapChat::find($id);
        if (!$rekap) {
            return response()->json(['message' => 'Rekap not found'], 404);
        }

        $rekap->delete();
        return response()->json(['message' => 'Rekap deleted successfully']);
    }
}