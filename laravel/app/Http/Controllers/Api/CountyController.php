<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function index()
    {
        return County::with('cities')->get();
    }

    public function show($id)
    {
        return County::with('cities.zipcodes')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:counties'
        ]);

        return County::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $county = County::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:counties,name,' . $county->id
        ]);

        $county->update($request->all());
        return $county;
    }

    public function destroy($id)
    {
        County::destroy($id);
        return response()->noContent();
    }
}
