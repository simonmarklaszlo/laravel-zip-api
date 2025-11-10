<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Zipcode;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    /**
     * @api {get} /api/zipcodes Get all zipcodes
     * @apiName GetZipcodes
     * @apiGroup Zipcode
     * @apiVersion 1.0.0
     *
     * @apiSuccess {Object[]} zipcodes List of zipcodes
     * @apiSuccess {Number} zipcodes.id Zipcode ID
     * @apiSuccess {Number} zipcodes.zipcode Zipcode value
     * @apiSuccess {Number} zipcodes.city_id City ID
     * @apiSuccess {Object} zipcodes.city City object
     * @apiSuccess {Object} zipcodes.city.county County object
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     [
     *       {
     *         "id": 1,
     *         "zipcode": 1011,
     *         "city_id": 1,
     *         "city": {
     *           "id": 1,
     *           "name": "Budapest",
     *           "county": {...}
     *         }
     *       }
     *     ]
     */
    public function index()
    {
        return Zipcode::with(['city.county'])->get();
    }

    /**
     * @api {get} /api/zipcodes/:id Get zipcode by ID
     * @apiName GetZipcode
     * @apiGroup Zipcode
     * @apiVersion 1.0.0
     *
     * @apiParam {Number} id Zipcode unique ID
     *
     * @apiSuccess {Number} id Zipcode ID
     * @apiSuccess {Number} zipcode Zipcode value
     * @apiSuccess {Number} city_id City ID
     * @apiSuccess {Object} city City object
     * @apiSuccess {Object} city.county County object
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "zipcode": 1011,
     *       "city_id": 1,
     *       "city": {
     *         "id": 1,
     *         "name": "Budapest",
     *         "county": {...}
     *       }
     *     }
     *
     * @apiError ZipcodeNotFound The zipcode was not found
     *
     * @apiErrorExample {json} Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "message": "Not found"
     *     }
     */
    public function show($id)
    {
        return Zipcode::with(['city.county'])->findOrFail($id);
    }

    /**
     * @api {post} /api/zipcodes Create new zipcode
     * @apiName CreateZipcode
     * @apiGroup Zipcode
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {Number} zipcode Zipcode value (unique, integer)
     * @apiParam {Number} city_id City ID (must exist)
     *
     * @apiParamExample {json} Request-Example:
     *     {
     *       "zipcode": 1011,
     *       "city_id": 1
     *     }
     *
     * @apiSuccess {Number} id Zipcode ID
     * @apiSuccess {Number} zipcode Zipcode value
     * @apiSuccess {Number} city_id City ID
     * @apiSuccess {Object} city City object
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 201 Created
     *     {
     *       "id": 1,
     *       "zipcode": 1011,
     *       "city_id": 1,
     *       "city": {...}
     *     }
     *
     * @apiError ValidationError The validation failed
     *
     * @apiErrorExample {json} Error-Response:
     *     HTTP/1.1 422 Unprocessable Entity
     *     {
     *       "message": "The zipcode field is required."
     *     }
     */
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

    /**
     * @api {put} /api/zipcodes/:id Update zipcode
     * @apiName UpdateZipcode
     * @apiGroup Zipcode
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {Number} id Zipcode unique ID
     * @apiParam {Number} zipcode Zipcode value (unique, integer)
     * @apiParam {Number} city_id City ID (must exist)
     *
     * @apiParamExample {json} Request-Example:
     *     {
     *       "zipcode": 1012,
     *       "city_id": 1
     *     }
     *
     * @apiSuccess {Number} id Zipcode ID
     * @apiSuccess {Number} zipcode Zipcode value
     * @apiSuccess {Number} city_id City ID
     * @apiSuccess {Object} city City object
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "zipcode": 1012,
     *       "city_id": 1,
     *       "city": {...}
     *     }
     *
     * @apiError ZipcodeNotFound The zipcode was not found
     * @apiError ValidationError The validation failed
     */
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

    /**
     * @api {delete} /api/zipcodes/:id Delete zipcode
     * @apiName DeleteZipcode
     * @apiGroup Zipcode
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {Number} id Zipcode unique ID
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 204 No Content
     *
     * @apiError ZipcodeNotFound The zipcode was not found
     */
    public function destroy($id)
    {
        Zipcode::destroy($id);
        return response()->noContent();
    }
}
