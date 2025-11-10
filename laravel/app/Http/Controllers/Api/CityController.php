<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @api {get} /api/cities Get all cities
     * @apiName GetCities
     * @apiGroup City
     * @apiVersion 1.0.0
     *
     * @apiSuccess {Object[]} cities List of cities
     * @apiSuccess {Number} cities.id City ID
     * @apiSuccess {String} cities.name City name
     * @apiSuccess {Number} cities.county_id County ID
     * @apiSuccess {Object} cities.county County object
     * @apiSuccess {Object[]} cities.zipcodes List of zipcodes
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     [
     *       {
     *         "id": 1,
     *         "name": "Budapest",
     *         "county_id": 1,
     *         "county": {...},
     *         "zipcodes": [...]
     *       }
     *     ]
     */
    public function index()
    {
        return City::with(['county', 'zipcodes'])->get();
    }

    /**
     * @api {get} /api/cities/:id Get city by ID
     * @apiName GetCity
     * @apiGroup City
     * @apiVersion 1.0.0
     *
     * @apiParam {Number} id City unique ID
     *
     * @apiSuccess {Number} id City ID
     * @apiSuccess {String} name City name
     * @apiSuccess {Number} county_id County ID
     * @apiSuccess {Object} county County object
     * @apiSuccess {Object[]} zipcodes List of zipcodes
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "name": "Budapest",
     *       "county_id": 1,
     *       "county": {...},
     *       "zipcodes": [...]
     *     }
     *
     * @apiError CityNotFound The city was not found
     *
     * @apiErrorExample {json} Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "message": "Not found"
     *     }
     */
    public function show($id)
    {
        return City::with(['county', 'zipcodes'])->findOrFail($id);
    }

    /**
     * @api {post} /api/cities Create new city
     * @apiName CreateCity
     * @apiGroup City
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {String} name City name (max 191 characters)
     * @apiParam {Number} county_id County ID (must exist)
     *
     * @apiParamExample {json} Request-Example:
     *     {
     *       "name": "Budapest",
     *       "county_id": 1
     *     }
     *
     * @apiSuccess {Number} id City ID
     * @apiSuccess {String} name City name
     * @apiSuccess {Number} county_id County ID
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 201 Created
     *     {
     *       "id": 1,
     *       "name": "Budapest",
     *       "county_id": 1
     *     }
     *
     * @apiError ValidationError The validation failed
     *
     * @apiErrorExample {json} Error-Response:
     *     HTTP/1.1 422 Unprocessable Entity
     *     {
     *       "message": "The name field is required."
     *     }
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'county_id' => 'required|exists:county,id'
        ]);

        return City::create($request->all());
    }

    /**
     * @api {put} /api/cities/:id Update city
     * @apiName UpdateCity
     * @apiGroup City
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {Number} id City unique ID
     * @apiParam {String} name City name (max 191 characters)
     * @apiParam {Number} county_id County ID (must exist)
     *
     * @apiParamExample {json} Request-Example:
     *     {
     *       "name": "Debrecen",
     *       "county_id": 2
     *     }
     *
     * @apiSuccess {Number} id City ID
     * @apiSuccess {String} name City name
     * @apiSuccess {Number} county_id County ID
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "name": "Debrecen",
     *       "county_id": 2
     *     }
     *
     * @apiError CityNotFound The city was not found
     * @apiError ValidationError The validation failed
     */
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

    /**
     * @api {delete} /api/cities/:id Delete city
     * @apiName DeleteCity
     * @apiGroup City
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {Number} id City unique ID
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 204 No Content
     *
     * @apiError CityNotFound The city was not found
     */
    public function destroy($id)
    {
        City::destroy($id);
        return response()->noContent();
    }
}
