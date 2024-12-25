<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        return Offer::all();
    }

    public function show($id)
    {
        return Offer::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'celebrity_id' => 'required|exists:celebrities,id',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $offer = Offer::create($validated);
        return response()->json($offer, 201);
    }

    public function update(Request $request, $id)
    {
        $offer = Offer::findOrFail($id);
        $offer->update($request->all());
        return response()->json($offer);
    }

    public function destroy($id)
    {
        Offer::destroy($id);
        return response()->json(['message' => 'Offer deleted successfully']);
    }
}
