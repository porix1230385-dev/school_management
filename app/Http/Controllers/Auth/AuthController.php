<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'profile' => 'required',
        ]);
        $profil = User::join('avoir_profils', 'users.id', '=', 'avoir_profils.user_id')
        ->join('profils', 'avoir_profils.profil_id', '=', 'profils.id')
        ->where([['users.email', $request->email], ['profils.id', $request->profile], ['users.etat_user', 1]])
        ->exists();
        if($profil){
            if(auth()->attempt($request->only('email', 'password'))){
                return redirect()->intended('home');
            }
            return redirect()->back()->withErrors("Les identifiants ne correspondent pas.");
        }

        return redirect()->back()->withErrors("Les informations ne correspondent pas.");
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
