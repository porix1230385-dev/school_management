<?php

namespace App\Helpers;

use App\Models\User;
// use App\Models\Profil;
use App\Models\AnneeScolaire;

class UsersHelpers
{
    public static function getAllUserProfiles($remove = [])
    {
        $data =  ['super_admin', 'admin', 'instituteur', 'enseignant', 'eleve','parent','administration'];
        return $remove ? array_values(array_diff($data, $remove)) : $data;
    }
    // get my profiles
    public static function getMyProfiles()
    {
        $profiles = AvoirProfil::join('profils','profils.id','=','avoir_profils.profil_id')
                        ->join('users','users.id','=','avoir_profils.user_id')
                        ->where('users.id',Auth::user()->id)
                        ->select('profils.lib_profil')
                        ->get();
        return $profiles;
    }
    // get user by email 
    public static function getUserByEmail($email)
    {
        $user =  User::where('email', $email)->first();
		if ($user) { return $user; } else { return false; }
    }
    // get user by id 
    public static function getUserByID($id)
    {
        $user =  User::where('id', $id)->first();
		if ($user) { return $user; } else { return false; }
    }

    // get user by matriucle
    public static function getUserByMatriucle($matriucle) //($matricule)
    {
        $user =  User::where('matricule', $matricule)->first();
		if ($user) { return $user; } else { return false; }
    }

    // get user profiles by email 
    public static function getUserProfilesByEP($email,$UserProfile)
    {
         $user =  User::join('avoir_profils','users.id','=','avoir_profils.user_id')
                ->join('profils','profils.id','=','avoir_profils.profil_id')
                ->where([
                        'users.email'=>$email,
                        'profils.id'=>$UserProfile
                    ])
                // ->select('profils.lib_profil')
                ->get();
		if ($user) { return $user; } else { return false; }
    }

    // get user profiles by matricule
    public static function getUserProfilesByMUP($matricule,$UserProfile)
    {
        $user =  User::join('avoir_profils','users.id','=','avoir_profils.user_id')
        ->join('profils','profils.id','=','avoir_profils.profil_id')
        // ->where('users.matricule', $matricule)
        ->where([
            'users.matricule'=>$matricule,
            'profils.id'=>$UserProfile
        ])
        ->select('profils.lib_profil')
        ->get();
        if ($user) { return $user; } else { return false; }
    }
    // get user profiles by userID
    public static function getUserProfilesByID($userID)
    {
       return $user =  User::join('avoir_profils','users.id','=','avoir_profils.user_id')
        ->join('profils','profils.id','=','avoir_profils.profil_id')
        ->where('users.id', $userID)
        ->select('profils.lib_profil')
        ->get();
    }

    // check if user have this profiles
    

    // public function getAllCycle()
    // {
    //     $cycles = ['premier cycle','second cycle','primaire'];

    // }

    public static function getDefaultUserImage()
    {
        return 'images/user.png';
    }

    public static function  getAdminFonction()
    {
        $fonctions = array_rand(['directeur','comptable','secretaire','educateur']);
        return $fonctions;
    }

    public static function getAnneeScolaireEnCour()
    {
       $anneeScolaireEncours = AnneeScolaire::all();
       foreach ($anneeScolaireEncours as $anneeScolaireEncour) {
        # code...
            $result = $anneeScolaireEncour->libelle_as;
       }
       return $result;
    }

    public static function getAnneeEnCour()
    {
       $anneeScolaire = AnneeScolaire::where('libelle_as',self::getAnneeScolaireEnCour())->first();
       $anneeEncour = explode('-', $anneeScolaire->libelle_as);
       return $anneeEncour[0];
    }

   
    
}
