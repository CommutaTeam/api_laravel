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
        $interest = Interest::where(['user_id' => auth()->id()])
            ->join('users', 'interests.user_id', '=', 'users.id')
            ->join('areas', 'users.area_id', '=', 'areas.id')
            ->join('subareas', 'users.subarea_id', '=', 'subareas.id')
            ->join('titles', 'users.title_id', '=', 'titles.id')
            ->join('organizations', 'interests.organization_id', '=', 'organizations.id')
            ->join('cities', 'interests.city_id', '=', 'cities.id')
            ->orderBy('interests.created_at', 'asc')
            ->select('areas.name as area_name',
                'subareas.name as subarea_name',
                'titles.name as title_name',
                'organizations.name as interest_organization_name',
                'organizations.acronym as interest_organization_acronym',
                'cities.title as interest_city_name')
            ->get();

        if ($interest == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }
        return response()->json($interest);
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
        $interest = Interest::where('users.id', $id)
            ->join('users', 'interests.user_id', '=', 'users.id')
            ->join('areas', 'users.area_id', '=', 'areas.id')
            ->join('subareas', 'users.subarea_id', '=', 'subareas.id')
            ->join('titles', 'users.title_id', '=', 'titles.id')
            ->join('organizations', 'interests.organization_id', '=', 'organizations.id')
            ->join('cities', 'interests.city_id', '=', 'cities.id')
            ->orderBy('interests.created_at', 'asc')
            ->select('areas.name as area_name',
                'subareas.name as subarea_name',
                'titles.name as title_name',
                'organizations.name as interest_organization_name',
                'organizations.acronym as interest_organization_acronym',
                'cities.title as interest_city_name')
            ->first();

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
        $interest = Interest::find($id);

        if ($interest == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        $userId = auth()->id();

        if ($userId != $interest->user_id) {
            return response(status: Response::HTTP_FORBIDDEN);
        }


        $data = $request->validate([
            'city_id' => ['required', 'numeric', 'exists:cities,id'],
        ]);
        $interest->update(['city_id' => $data['city_id']]);

        if ($interest == null) {
            return response(status: Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response(status: Response::HTTP_OK);
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
