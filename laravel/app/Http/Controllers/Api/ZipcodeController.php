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
        $request->validate([
            'zipcode' => 'required|integer|unique:zipcode',
            'city_id' => 'required|exists:city,id'
        ]);

        return Zipcode::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $zipcode = Zipcode::findOrFail($id);

        $request->validate([
            'zipcode' => 'required|integer|unique:zipcode,zipcode,' . $zipcode->id,
            'city_id' => 'required|exists:city,id'
        ]);

        $zipcode->update($request->all());
        return $zipcode;
    }

    public function destroy($id)
    {
        Zipcode::destroy($id);
        return response()->noContent();
    }
}
