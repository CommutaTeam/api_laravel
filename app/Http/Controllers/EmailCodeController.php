<?php

namespace App\Http\Controllers;

use App\Models\EmailCode;
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Mail;
use Exception;

class EmailCodeController extends Controller
{
   /**
     * Store a newly created resource in storage.
     */
    public function store(int $id)
    {
        $code = Str::random(12);

        EmailCode::create([
            'user_id' => $id,
            'code' => $code
        ]);
        
        return $code;
    }

    private function validadeCode(EmailCode $emailCode)
    {
        $createdAt = Carbon::parse($emailCode->created_at); 

        $now = Carbon::now();

        if ($now->diffInHours($createdAt) >= 6) {
            $emailCode->delete();
            return false;
        }
        return true;
    }

    /**
     * Display the specified resource.
     */
    public function show(): Response|JsonResponse
    {
        $emailCode = EmailCode::where('user_id', auth()->id());

        if ($emailCode == null) {
            return response(status: Response::HTTP_NOT_FOUND);
        }

        $isValid = $this->validadeCode($emailCode);

        if(!$isValid)
        {
            $this->sendCode(auth()->id());
            return response("Código expirado.",status: Response::HTTP_NOT_FOUND);
        }

        return response()->json($emailCode);
    }


    public function authorizeEmail(string $code)
    {

        $user = User::find(auth()->id());

        $emailCode = EmailCode::where('user_id', $user->id)->get()->first();
        
        $isValid = $this->validadeCode($emailCode);

        if(!$isValid)
        {
            $this->store($user->id);
            $this->sendCode($user->id);

            return response("O código enviado está expirado, um novo foi enviado para seu email.", status: Response::HTTP_BAD_REQUEST);
        }

        if($emailCode->code == $code)
        {
            $user->update([
                'email_verified_at' => Carbon::now(),
            ]);
            return response(status: Response::HTTP_OK);
        }

        return response("Código inválido.", status: Response::HTTP_BAD_REQUEST);

    }
    public function sendCode(int $id)
    {
        $code = $this->store($id);

        try{

            $user = User::find($id);

            Mail::to($user->email)->send(new EmailVerification($user, $code));

        }catch(Exception $ex)
        {
            throw new Exception($ex);
            //throw new Exception("Erro ao enviar email.");
        }
        
    }
}
