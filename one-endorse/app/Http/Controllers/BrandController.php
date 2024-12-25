<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return Brand::all();
    }

    public function show($id)
    {
        return Brand::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'company_size' => 'required|numeric',
            'budget' => 'required|numeric',
        ]);

        $brand = Brand::create($validated);
        return response()->json($brand, 201);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return response()->json($brand);
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return response()->json(['message' => 'Brand deleted successfully']);
    }
}
