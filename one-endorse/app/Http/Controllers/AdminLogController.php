<?php

namespace App\Http\Controllers;

use App\Models\AdminLog;
use Illuminate\Http\Request;

class AdminLogController extends Controller
{
    public function index()
    {
        return AdminLog::all();
    }

    public function show($id)
    {
        return AdminLog::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'action' => 'required|string',
            'admin_id' => 'required|exists:users,id',
            'description' => 'nullable|string',
        ]);

        $log = AdminLog::create($validated);
        return response()->json($log, 201);
    }

    public function destroy($id)
    {
        AdminLog::destroy($id);
        return response()->json(['message' => 'Log deleted successfully']);
    }
}
