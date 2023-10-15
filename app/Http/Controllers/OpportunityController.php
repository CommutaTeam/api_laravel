<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();

        $opportunities = Opportunity::where('user_id', $user_id)
            ->join('users', 'opportunities.interesting_user_id', '=', 'users.id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->join('subareas', 'users.subarea_id', '=', 'subareas.id')
            ->join('titles', 'users.title_id', '=', 'titles.id')
            ->join('organizations', 'users.organization_id', '=', 'organizations.id')
            ->select('opportunities.id as opportunity_id', 
                'users.first_name as user_name', 
                'cities.title as city_name',
                'subareas.name as subarea_name',
                'titles.name as title_name',
                'organizations.name as organization_name')
            ->orderBy('opportunities.created_at', 'desc')
            ->get();

        return response()->json($opportunities);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $opportunity = Opportunity::where('opportunities.id', $id)
            ->join('users', 'opportunities.interesting_user_id', '=', 'users.id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->join('subareas', 'users.subarea_id', '=', 'subareas.id')
            ->join('titles', 'users.title_id', '=', 'titles.id')
            ->join('organizations', 'users.organization_id', '=', 'organizations.id')
            ->select('opportunities.id as opportunity_id', 
                'users.first_name as user_name', 
                'cities.title as city_name',
                'subareas.name as subarea_name',
                'titles.name as title_name',
                'organizations.name as organization_name')
            ->first();
        ;

        if ($opportunity == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        return response()->json($opportunity);
    }
}
