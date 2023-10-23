<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $organizations = Organization::select('id as organization_id',
                'name as organization_name',
                'acronym as organization_acronym')
            ->get();

        return response()->json($organizations);
    }

    public function show($id)
    {
        $organization = Organization::where('id', $id)
            ->select('id as organization_id',
                'name as organization_name',
                'acronym as organization_acronym')
            ->get();

        return response()->json($organization);
    }
}
