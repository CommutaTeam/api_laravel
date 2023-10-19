<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $contacts = Contact::where('first_user_id', $user_id)
            ->join('users', 'contacts.second_user_id', '=', 'users.id')
            ->join('organizations', 'users.organization_id', 'organizations.id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->orderBy('contacts.created_at', 'desc')
            ->select('contacts.id as contact_id',
                'users.first_name as contact_name',
                'organizations.name as contact_organization_name',
                'organizations.acronym as contact_organization_acronym',
                'cities.title as city_name')
            ->get();

        return response()->json($contacts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_user_id' => ['required', 'numeric', 'exists:users,id'],
            'second_user_id' => ['required', 'numeric', 'exists:users,id']
        ]);

        $contact = Contact::create([
            'first_user_id' => auth()->id(),
            'second_user_id' => $data['second_user_id']
        ]);

        if ($contact == null) {
            return response(status: Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response(status: Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::where('contacts.id', $id)
            ->join('users', 'contacts.second_user_id', '=', 'users.id')
            ->join('organizations', 'users.organization_id', 'organizations.id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->orderBy('contacts.created_at', 'desc')
            ->select('contacts.id as contact_id',
                'users.first_name as contact_name',
                'organizations.name as contact_organization_name',
                'organizations.acronym as contact_organization_acronym',
                'cities.title as city_name')
            ->first();

        if ($contact == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }
            

        return response()->json($contact);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);

        if ($contact == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }
            
        $contact->delete();

        return response(status: Response::HTTP_NO_CONTENT);
    }
}
