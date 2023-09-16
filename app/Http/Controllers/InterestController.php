<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'city_id' => ['required', 'numeric', 'exists:cities,id'],
            'organization_id' => ['required', 'numeric', 'exists:organizations,id'],
        ]);

        $interest = Interest::create([
            'user_id' => auth()->id(),
            'city_id' => $data['city_id'],
            'organization_id' => $data['organization_id'],
        ]);

        if ($interest == null) {
            return response(status: Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response(status: Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response|JsonResponse
    {
        $interest = Interest::find($id);

        if ($interest == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        return response()->json($interest);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $interest = Interest::find($id);

        if ($interest == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        $userId = auth()->id();

        if ($userId != $interest->user_id) {
            return response(status: Response::HTTP_FORBIDDEN);
        }

        $interest->delete();
        return response(status: Response::HTTP_NO_CONTENT);
    }
}
