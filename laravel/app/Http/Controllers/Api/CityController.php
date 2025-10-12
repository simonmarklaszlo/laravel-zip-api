<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return City::with(['county', 'zipcodes'])->get();
    }

    public function show($id)
    {
        return City::with(['county', 'zipcodes'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'county_id' => 'required|exists:county,id'
        ]);

        return City::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:191',
            'county_id' => 'required|exists:county,id'
        ]);

        $city->update($request->all());
        return $city;
    }

    public function destroy($id)
    {
        City::destroy($id);
        return response()->noContent();
    }
}
