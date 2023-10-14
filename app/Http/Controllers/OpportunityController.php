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
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($opportunities);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Opportunity::find($id);

        if ($contact == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        return response()->json($contact);
    }
}
