<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    /**
     * @api {get} /api/counties Get all counties
     * @apiName GetCounties
     * @apiGroup County
     * @apiVersion 1.0.0
     *
     * @apiSuccess {Object[]} counties List of counties
     * @apiSuccess {Number} counties.id County ID
     * @apiSuccess {String} counties.name County name
     * @apiSuccess {Object[]} counties.cities List of cities in the county
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     [
     *       {
     *         "id": 1,
     *         "name": "Pest",
     *         "cities": []
     *       }
     *     ]
     */
    public function index()
    {
        return County::with('cities')->get();
    }

    /**
     * @api {get} /api/counties/:id Get county by ID
     * @apiName GetCounty
     * @apiGroup County
     * @apiVersion 1.0.0
     *
     * @apiParam {Number} id County unique ID
     *
     * @apiSuccess {Number} id County ID
     * @apiSuccess {String} name County name
     * @apiSuccess {Object[]} cities List of cities
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "name": "Pest",
     *       "cities": []
     *     }
     *
     * @apiError CountyNotFound The county was not found
     *
     * @apiErrorExample {json} Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "message": "Not found"
     *     }
     */
    public function show($id)
    {
        return County::with('cities.zipcodes')->findOrFail($id);
    }

    /**
     * @api {post} /api/counties Create new county
     * @apiName CreateCounty
     * @apiGroup County
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {String} name County name (unique, max 255 characters)
     *
     * @apiParamExample {json} Request-Example:
     *     {
     *       "name": "Pest"
     *     }
     *
     * @apiSuccess {Number} id County ID
     * @apiSuccess {String} name County name
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 201 Created
     *     {
     *       "id": 1,
     *       "name": "Pest"
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
            'name' => 'required|string|max:255|unique:county'
        ]);

        return County::create($request->all());
    }

    /**
     * @api {put} /api/counties/:id Update county
     * @apiName UpdateCounty
     * @apiGroup County
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {Number} id County unique ID
     * @apiParam {String} name County name (unique, max 255 characters)
     *
     * @apiParamExample {json} Request-Example:
     *     {
     *       "name": "Budapest"
     *     }
     *
     * @apiSuccess {Number} id County ID
     * @apiSuccess {String} name County name
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "name": "Budapest"
     *     }
     *
     * @apiError CountyNotFound The county was not found
     * @apiError ValidationError The validation failed
     */
    public function update(Request $request, $id)
    {
        $county = County::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:county,name,' . $county->id
        ]);

        $county->update($request->all());
        return $county;
    }

    /**
     * @api {delete} /api/counties/:id Delete county
     * @apiName DeleteCounty
     * @apiGroup County
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiParam {Number} id County unique ID
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 204 No Content
     *
     * @apiError CountyNotFound The county was not found
     */
    public function destroy($id)
    {
        County::destroy($id);
        return response()->noContent();
    }
}
