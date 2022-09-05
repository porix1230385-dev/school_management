<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Helpers\UsersHelpers;
use App\Models\User as UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

     /**
     * Login user and create token
     *
     * @param  [string] email
     * @param [string] matricule
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */

     public function login(Request $request)
     {
        $request->validate([
            'identity' => 'required',
            'profile'   => 'required',
            'password' => 'required',
        ]);

        $request['email'] = $request['matricule'] = $request->get('identity');
        // $request['profile']
        $credentials =  [
            'with_email' => request(['profile','email', 'password']),
            'with_matricule' => request(['profile','matricule', 'password']),
        ];
        // checking credentials
        if (!Auth::attempt($credentials['with_email']) && !Auth::attempt($credentials['with_matricule']))
        return response()->json([
            'success' => false,
            'message' => "Vous avez fourni des mauvais identifiants"
        ], 401);

        //see if the user is associated with their profile
        $identity = $request->get('identity');
        $profile = $request->get('profile');
        if($request->isEmail($identity)){
           $userIP = UsersHelpers::getUserProfilesByEP($identity,$profile);
        }
        else{
            $userIP = UsersHelpers::getUserProfilesByMUP($identity,$profile);
        }
        if($userIP == false){
            return response()->json([
                'success' => false,
                'message' => 'Vous n\'êtes pas assoccié à se profile'
            ]);
        }
        die();
         // generate api consumer token
         $tokenResult = $request->user()->createToken('Personal Access Token');
         $token = $tokenResult->token;
         if ($request->remember_me)
             $token->expires_at = Carbon::now()->addWeeks(1);
         $token->save();

          // update user connection datas
          $user = UserModel::find($request->user()->id);
          $user->update([
              'last_login_at' => Carbon::now()->toDateTimeString(),
              'last_login_ip' => $request->getClientIp(),
              'is_connected' => true,
          ]);

            // ask bot send login log
            $this->loggingIn($user);

             // visualize response
             return response()->json([
                'success' => true,
                'access_token' => 'Bearer ' . $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'user_type' => $user->user_type,
                    'email' => $user->email,
                    'phone' => $user->phone,
                ],
                'message' => 'Connexion établie avec succès !',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString()
            ]);

     }
     
}
