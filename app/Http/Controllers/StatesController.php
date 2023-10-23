<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function index()
    {
        $states = State::select('id as state_id',
                'title as state_name',
                'letter as uf')
            ->get();

        return response()->json($states);
    }
}
