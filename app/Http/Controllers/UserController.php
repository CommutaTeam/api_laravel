<?php

namespace App\Http\Controllers;

use App\Enums\Genre;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\Password;
use Exception;
class UserController extends Controller
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
    public function login()
    {
        printf("Login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'genre' => ['required', new Enum(Genre::class)],
            'phone' => ['nullable', 'numeric', 'unique:' . User::class],
            'bio' => ['nullable', 'string', 'max:500'],
            'region_id' => ['required', 'numeric'],
            'state_id' => ['required', 'numeric'],
            'city_id' => ['required', 'numeric'],
            'area_id' => ['nullable', 'numeric'],
            'subarea_id' => ['nullable', 'numeric'],
            'title_id' => ['required', 'numeric'],
            'organization_id' => ['required', 'numeric'],
        ]);

        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'genre' => $data['genre'],
            'phone' => $data['phone'] ?? null,
            'bio' => $data['bio'] ?? null,
            'region_id' => $data['region_id'],
            'state_id' => $data['state_id'],
            'city_id' => $data['city_id'],
            'area_id' => $data['area_id'] ?? null,
            'subarea_id' => $data['subarea_id'] ?? null,
            'title_id' => $data['title_id'],
            'organization_id' => $data['organization_id'],
        ]);
        
        try{
            printf("Criando usuário");
            $user->sendEmailVerificationNotification();
        }catch(Exception $e)
        {
            printf("Erro");
            $user->delete();
        }
        if ($user == null) {
            return response(status: Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response(status: Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response|JsonResponse
    {
        $user = User::find($id);

        if ($user == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);

        if ($user == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        $data = $request->validate([
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['nullable', 'numeric', 'unique:' . User::class],
            'region_id' => ['nullable', 'numeric'],
            'state_id' => ['nullable', 'numeric'],
            'city_id' => ['nullable', 'numeric'],
            'area_id' => ['nullable', 'numeric'],
            'subarea_id' => ['nullable', 'numeric'],
            'title_id' => ['nullable', 'numeric'],
            'organization_id' => ['nullable', 'numeric'],
        ]);

        if(!empty($data['email'])){
            $user->update([
                'email' => $data['email'],
            ]);
        }

        if(!empty($data['phone'])){
            $user->update([
                'phone' => $data['phone'],
            ]);
        }

        $user->update([
            'region_id' => $data['region_id'] ?? $user->region_id,
            'state_id' => $data['state_id'] ?? $user->state_id,
            'city_id' => $data['city_id'] ?? $user->city_id,
            'area_id' => $data['area_id'] ?? $user->area_id,
            'subarea_id' => $data['subarea_id'] ?? $user->subarea_id,
            'title_id' => $data['title_id'] ?? $user->title_id,
            'organization_id' => $data['organization_id'] ?? $user->organization_id,
        ]);

        if ($user == null) {
            return response(status: Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response(status: Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (auth()->id() != $id) {
           return response(status: Response::HTTP_FORBIDDEN);
        }
        
        $user = User::find($id);

        $user->delete();

        return response(status: Response::HTTP_NO_CONTENT);
    }
}
