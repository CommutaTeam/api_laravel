<?php

namespace App\Http\Controllers;

use Illuminate\Http\{JsonResponse, Request, Response};
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logIn(Request $request): JsonResponse|Response
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'max:255'],
            'device_name' => ['required'],
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return response()->json([
                'token' => $request->user()->createToken($data['device_name'])->plainTextToken
            ]);
        }

        return response(status: Response::HTTP_FORBIDDEN);
    }

    public function logOut(Request $request): Response
    {
        $request->user()->currentAccessToken()->delete();
        return response(status: Response::HTTP_OK);
    }

    public function me(Request $request): JsonResponse
    {
        return response()->json([
            'me' => $request->user(),
        ]);
    }
}
