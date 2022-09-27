<?php

namespace App\Http\Controllers\Api;

use Hash;
use Exception;
use Carbon\Carbon;
use App\Helpers\Qs;
// use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Repositories\UserRepo;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserChangePass;

class AccountController extends Controller
{
    protected $user;

    public function __construct(UserRepo $user)
    {
        $this->user = $user;
    }

    // reset password
    public function resetPassword(Request $request)
    {
        try {

            $user = $this->user->findByEmail($request->email);
           
            if(count($user) > 0){
                $token = Str::random(40);
                $domain = URL::to('/');
                $url = $domain.'auth/reset-password?token='.$token;
             
                
                // die();
                $data['url'] = $url;
                $data['email'] = $request->email;
                $data['title'] = "FOLO Education ";
                $data['body'] = "Please click on below link to reset your password.";
                $data['user'] = $user;

                // send mail 
                Mail::send('emails.forgetPasswordMail',['data'=>$data],function($message) use ($data){
                  $message->to($data['email'])->subject($data['title']);  
                });

                $dateTime = Carbon::now()->format('Y-m-d H:i:s');
                PasswordReset::updateOrCreate(
                    ['email' => $request->email],
                    [
                        'email'=>$request->email,
                        'token'=>$token,
                        'created_at'=>$dateTime,
                    ]
            );
            // php artisan optimize => clear configuration, route, files cache
            return response()->json(['success'=>true, 'msg'=>'Please check your mail to reset your password.']); 

            }else {
                return response()->json(['success'=>false, 'msg'=>'user not found!']); 
            }
            
        } catch (Exception $exc) {
           return response()->json(['success'=>false, 'msg'=>$exc->getMessage()]);
        }
    }

    // update profile 
    public function update_profile(Request $req)
    {
        try{
            $user = Auth::user();
            // dd($user);
            // strtoupper(Str::random(10)),
            // $d = $user->matricule ? $req->only(['nom','prenom','email', 'telephone1','telephone2', 'address']) : $req->only(['email', 'telephone1', 'telephone2', 'address']);
            $req->validate([
                'nom'=>'sometimes|nullable|string',
                'prenom'=>'sometimes|nullable|string',
                'email' => 'sometimes|nullable|email|max:100|unique:users,id',
                'telephone1' => 'sometimes|nullable|string|min:10|max:20',
                'telephone2' => 'sometimes|nullable|string|min:10|max:20',
                'address' => 'sometimes|string|min:6|max:120',
                // 'matricule' => 'sometimes|nullable|alpha_dash|min:8|max:100|unique:users',
                'photo' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048'
            ]);

            $d =  $req->only(['nom','prenom','email', 'telephone1','telephone2', 'address','photo']);
            if(!$user->matricule && !$req->email){
                return response()->json([
                    "success" => false,
                    "error_type" => "USER INVALID",
                    "message" => "Identifiants utilisateurs invalides",
                ]);
            }
            
            // $user_type_name = session('my_profile')->profileName;
            ($user->code && $user->code != null) ? $code = $user->code : $code = strtoupper(Str::random(10));
            // echo $code;
            // die();
            // $photo = $req->file('photo');
            // echo $photo;
            // die();
            if($req->hasFile('photo')) {
                $photo = $req->file('photo');
                // echo $photo;
                // die();
                $f = Qs::getFileMetaData($photo);
                $f['name'] = $code.'.'. $f['ext'];
                // echo var_dump($f);
                // die();
                // $f['path'] = Storage::disk('public')->put('users',$f['name']);
                $f['path'] = $photo->storeAs('users',$f['name'],'public');
                // $f['path'] = $photo->storeAs(Qs::getUploadPath(),$f['name']);
                $d['photo'] = $f['path'];

                // echo var_dump($d);
                // die();
                // dd($f);
                // $d['photo'] = $f['path'];
            }
          

            $this->user->update($user->id, $d);
            return response()->json([
                "success" => true,
                "message" => "Informations utilisateur mises à jour avec succès",
            ]);
        }catch(Exception $exc){
            return response()->json([
                'success' => false,
                'message' => $exc->getMessage()
            ]);
        }
    }

    // change password
    public function changePassword(UserChangePass $request)
    {
        // data interception
        $user = $request->user();
        // echo $user->nom;
        // die();
        $old_pass = $request->current_password;
        $new_pass = $request->password;
        $confirm_pass = $request->password_confirmation;
        // new password confirmation
        if ($new_pass != $confirm_pass) {
            return response()->json([
                "success" => false,
                "error_type" => "PASSWORD_NOT_CONFIRMED",
                "message" => "Le mot de passe n'a pas été confirmé",
            ]);
        }
        // old password validation
        else if (password_verify($old_pass, $user->password)) {
            $datas = ['password' => Hash::make($new_pass)];
            $this->user->update($user->id, $datas);
            // visualize response
            return response()->json([
                "success" => true,
                "message" => "Changement du mot de passe effectué",
            ]);
        }
        // in false case
        else {
            return response()->json([
                "success" => false,
                "error_type" => "INVALID_PASSWORD",
                "message" => "L'ancien mot de passe est incorrect",
            ]);
        }
    }
}
