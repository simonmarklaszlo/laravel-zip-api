<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Zipcode;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    public function index()
    {
        return Zipcode::with(['city.county'])->get();
    }

    public function show($id)
    {
        return Zipcode::with(['city.county'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'zipcode' => 'required|integer|unique:zipcode',
            'city_id' => 'required|exists:city,id'
        ]);

        $zipcode = Zipcode::create($validated);
        $zipcode = Zipcode::with(['city.county'])->find($zipcode->id);

        return response()->json($zipcode, 201);
    }

    public function update(Request $request, $id)
    {
        $zipcode = Zipcode::findOrFail($id);

        $validated = $request->validate([
            'zipcode' => 'required|integer|unique:zipcode,zipcode,' . $zipcode->id,
            'city_id' => 'required|exists:city,id'
        ]);

        $zipcode->update($validated);
        $zipcode = Zipcode::with(['city.county'])->find($zipcode->id);

        return response()->json($zipcode);
    }

    public function destroy($id)
    {
        Zipcode::destroy($id);
        return response()->noContent();
    }
}
