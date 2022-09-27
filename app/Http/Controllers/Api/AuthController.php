<?php

namespace App\Http\Controllers\Api;

use Exception;
use Carbon\Carbon;
// use App\Models\User;
use App\Http\Controllers\Bot\MisterFoloBot;
use App\Models\AvoirProfil;
// use App\Helpers\UsersHelpers;
use Illuminate\Http\Request;
use App\Models\User as UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

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
        try{

            // $request->validate([
            //     'profile'=>'required',
            //     'identity' => 'required',
            //     'password' => 'required',
            // ]);

            $this->validate($request, [
                'profile' => 'required',
                'identity' => 'required',
                'password' => 'required'
            ]); 
            // die();
           
            $request['email'] = $request['matricule'] = $request->get('identity');
            
            $credentials =  [
                'with_email' => request(['email','password']),
                'with_matricule' => request(['matricule','password']),
            ];
             
            // checking credentials
            if (!Auth::attempt($credentials['with_email']) && !Auth::attempt($credentials['with_matricule']))
            return response()->json([
                'success' => false,
                'error'=>'Unauthorised',
                'message' => "Vous avez fourni des mauvais identifiants"
            ], 401);

             // checking profile 
            $profile = $request['profile'];
            $checkProfile = AvoirProfil::join('profils','profils.id','=','avoir_profils.profil_id')
        ->where(
                [
                'profil_id'=>$profile,
                'user_id' =>$request->user()->id
                ]
            )
            ->select(
                    'profils.id as IDProfile',
                    'profils.lib_profil as profileName'
                )
            ->first();
        //    echo var_dump($checkProfile);
        //    die();
            if(!$checkProfile)
            {
                return response()->json([
                    'success' => false,
                    'error'=>'Unauthorised',
                    'message' => "Vous n\'êtes pas associé a se profile"
                ], 401); 
            }
            
            // add profile attribute to auth session 
            // $my_profile = Auth::user()->setAttribute('my_profile',$checkProfile);
            $my_profile = session(['my_profile' => $checkProfile]);
            // echo session('my_profile')->profileName;
            // die();
            //  generate api consumer token
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
    
                // get other profile if exist
                // $other_profile = AvoirProfil::join('profils','profils.id','=','avoir_profils.profil_id')
                // ->where('user_id',$request->user()->id)
                // ->where('profil_id','!=',$checkProfile->profil_id)
                // ->select(
                //     'profils.id as IDProfile',
                //     'lib_profil as profileName'
                //     )
                // ->get();
                // $photo = asset('storage/')
                 // visualize response
                 return response()->json([
                    'success' => true,
                    'access_token' => 'Bearer ' . $tokenResult->accessToken,
                    'token_type' => 'Bearer',
                    'user' => [
                        'id' => $user->id,
                        'nom' => $user->nom,
                        'prenom' => $user->prenom,
                        // 'user_profile' => $checkProfile->profil->lib_profil,
                        // 'my_profile_id' => Auth::user()->my_profile->profil_id,
                        'my_profile_id' => $checkProfile->IDProfile,
                        'my_profile_name' => $checkProfile->profileName,
                        // 'other_profile' => ($other_profile) ? $other_profile:'',
                        'email' => $user->email,
                        'phone' => $user->telephone1,
                    ],
                    'message' => 'Connexion établie avec succès !',
                    'expires_at' => Carbon::parse(
                        $tokenResult->token->expires_at
                    )->toDateTimeString()
                ]);

        }catch(Exception $exc){
             // visualize error
             return response()->json([
                'success' => false,
                'message' => 'Server Error',
                'error_message' => $exc->getMessage(),
            ]);
        }
        
        

     }
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        try {
            // update user connection datas
            $user = UserModel::find($request->user()->id);
            $user->update([
                'last_logout_at' => Carbon::now()->toDateTimeString(),
                'last_login_ip' => $request->getClientIp(),
                'is_connected' => false,
            ]);

            // remove item from session
            session()->flush('my_profile');

           // revoke user's token and ask bot to send logout log
           $request->user()->token()->revoke();
           $this->loggedOut($user);

            // visualize response
            return response()->json([
                'success' => true,
                'message' => 'Déconnecté',
            ]);
        } catch (Exception $exc) {
            // visualize error
            return response()->json([
                'success' => false,
                'message' => 'Déconnecté',
                'error_message' => $exc->getMessage(),
            ]);
        }
    }
        /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        try {
            // organize datas
            $datas = [
                'success' => true,
                'user' => $request->user()->only(['nom',
                'prenom',
                'email',
                'genre',
                'adresse',
                'telephone1',
                'telephone2',
                'matricule',
                'profile_image_url'
            ])];
            // visualize response
            return response()->json($datas);
        } catch (Exception $exc) {
            // visualize error
            return response()->json([
                'success' => false,
                'message' => "Nous n'avons pas pu récupérer vos informations",
                'error_message' => $exc->getMessage(),
            ], 401);
        }
    }

    // The user is logging into the application
    protected function loggingIn(UserModel $user)
    {
        // ANCHOR send message when a user is connected
        $bot = new MisterFoloBot;
        $bot->logUserLogin($user);
    }

    // The user has logged out of the application
    protected function loggedOut(UserModel $user)
    {
        //  ANCHOR send message when a user is disconnected
        $bot = new MisterFoloBot;
        $bot->logUserLogout($user);
    }
     
}
