<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::select('id as city_id',
                'title as city_name')
            ->get();

        return response()->json($cities);
    }

    public function listPerUF($state_id)
    {
        $cities = City::where('state_id', $state_id)
            ->select('id as city_id',
                'title as city_name')
            ->get();

        return response()->json($cities);
    }
}
