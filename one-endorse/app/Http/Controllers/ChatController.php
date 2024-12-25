<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return Chat::all();
    }

    public function show($id)
    {
        return Chat::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        $chat = Chat::create($validated);
        return response()->json($chat, 201);
    }

    public function destroy($id)
    {
        Chat::destroy($id);
        return response()->json(['message' => 'Chat deleted successfully']);
    }
}
