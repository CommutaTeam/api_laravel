<?php

namespace App\Http\Controllers;

use App\Models\Subarea;
use Illuminate\Http\Request;

class SubareasController extends Controller
{
    public function index()
    {
        $subarea = Subarea::select('id as subarea_id',
                'name as subarea_name',
                'area_id')
            ->get();

        return response()->json($subarea);
    }
}
