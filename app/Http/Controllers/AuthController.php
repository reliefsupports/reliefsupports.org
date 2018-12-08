<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Tymon\JWTAuth\PayloadFactory;
use App\User;
use App\Clients;
// use JWTFactory;
use JWTAuth;
use Validator;
use Response;

class AuthController extends Controller
{
    public function attempt(Request $request)
    {
        // Validate request.
        $validator = Validator::make($request->all(), [
            'appId'=> 'required',
            'appSecret'=> 'required'
        ]);
        if ($validator->fails()) return response('Unauthorized', 401);

        $appId = $request->appId;
        $appSecret = $request->appSecret;

        // Checking for valid app.
        $clientsColl = Clients::where([
            'app_id' => $appId,
            'app_secret' => $appSecret
        ])->get();
        if (count($clientsColl) === 0) return response('Unauthorized', 401);

        // Checking for valid client.
        $client = $clientsColl[0];
        $clientId = $client->client_id;
        $userColl = User::where([
            'client_id' => $clientId
        ])->get();
        if (count($userColl) === 0) return response('Unauthorized', 401);

        // Create token.
        $user = $userColl[0];
        $token = JWTAuth::fromUser($user);

        return Response::json(compact('token'));
    }
}
