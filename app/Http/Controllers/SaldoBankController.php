<?php

namespace App\Http\Controllers;

use App\Models\SaldoBank;
use Illuminate\Http\Request;

class SaldoBankController extends Controller
{
    public function index()
    {
        $saldoBank = SaldoBank::all();
        return response()->json($saldoBank);
    }

    public function show($id)
    {
        $saldo = SaldoBank::find($id);
        if (!$saldo) {
            return response()->json(['message' => 'Saldo not found'], 404);
        }
        return response()->json($saldo);
    }

    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'required|string',
            'bank' => 'required|string',
            'nominal' => 'required|string', // Jika nominal seharusnya numeric, gunakan 'numeric' sebagai validasi
        ]);

        $saldo = SaldoBank::create($request->all());
        return response()->json($saldo, 201);
    }

    public function update(Request $request, $id)
    {
        $saldo = SaldoBank::find($id);
        if (!$saldo) {
            return response()->json(['message' => 'Saldo not found'], 404);
        }

        $request->validate([
            'bulan' => 'sometimes|required|string',
            'bank' => 'sometimes|required|string',
            'nominal' => 'sometimes|required|string', // Jika nominal seharusnya numeric, gunakan 'numeric' sebagai validasi
        ]);

        $saldo->update($request->all());
        return response()->json($saldo);
    }

    public function destroy($id)
    {
        $saldo = SaldoBank::find($id);
        if (!$saldo) {
            return response()->json(['message' => 'Saldo not found'], 404);
        }

        $saldo->delete();
        return response()->json(['message' => 'Saldo deleted successfully']);
    }
}