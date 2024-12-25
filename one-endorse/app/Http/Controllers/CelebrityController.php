<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{
    public function index()
    {
        return Celebrity::all();
    }

    public function show($id)
    {
        return Celebrity::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'image' => 'required|string',
            'price_per_minute' => 'required|numeric',
            'price_per_meeting' => 'required|numeric',
            'is_available_for_meeting' => 'required|boolean',
        ]);

        $celebrity = Celebrity::create($validated);
        return response()->json($celebrity, 201);
    }

    public function update(Request $request, $id)
    {
        $celebrity = Celebrity::findOrFail($id);
        $celebrity->update($request->all());
        return response()->json($celebrity);
    }

    public function destroy($id)
    {
        Celebrity::destroy($id);
        return response()->json(['message' => 'Celebrity deleted successfully']);
    }
}
