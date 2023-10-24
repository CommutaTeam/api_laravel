<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index()
    {
        $areas = Area::select('id as area_id',
                'name as area_name')
            ->get();

        return response()->json($areas);
    }
}
