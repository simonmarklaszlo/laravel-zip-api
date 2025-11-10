<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * @api {post} /api/login User Login
     * @apiName Login
     * @apiGroup Authentication
     * @apiVersion 1.0.0
     *
     * @apiParam {String} email User email address
     * @apiParam {String} password User password
     *
     * @apiParamExample {json} Request-Example:
     *     {
     *       "email": "admin@example.com",
     *       "password": "password"
     *     }
     *
     * @apiSuccess {String} message Success message
     * @apiSuccess {Object} user User object
     * @apiSuccess {String} token API token
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "message": "Login successful",
     *       "user": {
     *         "id": 1,
     *         "name": "Admin",
     *         "email": "admin@example.com"
     *       },
     *       "token": "1|abcdef123456..."
     *     }
     *
     * @apiError InvalidCredentials The provided credentials are incorrect
     *
     * @apiErrorExample {json} Error-Response:
     *     HTTP/1.1 422 Unprocessable Entity
     *     {
     *       "message": "The provided credentials are incorrect."
     *     }
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'token' => $token,
        ]);
    }

    /**
     * @api {post} /api/logout User Logout
     * @apiName Logout
     * @apiGroup Authentication
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiSuccess {String} message Success message
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "message": "Logged out successfully"
     *     }
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }

    /**
     * @api {get} /api/user Get authenticated user
     * @apiName GetUser
     * @apiGroup Authentication
     * @apiVersion 1.0.0
     * @apiPermission authenticated
     *
     * @apiHeader {String} Authorization Bearer token
     *
     * @apiSuccess {Number} id User ID
     * @apiSuccess {String} name User name
     * @apiSuccess {String} email User email
     *
     * @apiSuccessExample {json} Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "name": "Admin",
     *       "email": "admin@example.com"
     *     }
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
