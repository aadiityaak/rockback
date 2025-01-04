<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function index()
    {
        $servers = Server::all();
        return response()->json($servers);
    }

    public function show($id)
    {
        $server = Server::find($id);
        if (!$server) {
            return response()->json(['message' => 'Server not found'], 404);
        }
        return response()->json($server);
    }

    public function store(Request $request)
    {
        $request->validate([
            'server' => 'nullable|string|max:300',
            'alamat_server' => 'required|string|max:200',
            'user' => 'nullable|string|max:150',
            'password' => 'nullable|string|max:150',
        ]);

        $server = Server::create($request->all());
        return response()->json($server, 201);
    }

    public function update(Request $request, $id)
    {
        $server = Server::find($id);
        if (!$server) {
            return response()->json(['message' => 'Server not found'], 404);
        }

        $request->validate([
            'server' => 'sometimes|nullable|string|max:300',
            'alamat_server' => 'sometimes|nullable|string|max:200',
            'user' => 'sometimes|nullable|string|max:150',
            'password' => 'sometimes|nullable|string|max:150',
        ]);

        $server->update($request->all());
        return response()->json($server);
    }

    public function destroy($id)
    {
        $server = Server::find($id);
        if (!$server) {
            return response()->json(['message' => 'Server not found'], 404);
        }

        $server->delete();
        return response()->json(['message' => 'Server deleted successfully']);
    }
}