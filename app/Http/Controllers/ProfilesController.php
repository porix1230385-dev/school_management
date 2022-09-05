<?php

namespace App\Http\Controllers;

use App\helpers\UsersHelpers;

class ProfilesController extends Controller
{
    // function index 
    public function getUserByID(int $id){
       return UsersHelpers::getUserByID($id);
    }

    public function getUserProfilesByUID(int $id){
       $my_profiles = UsersHelpers::getUserProfilesByID($id);
       if($my_profiles){ return response()->json([
        'success' => true,
        'my_profiles' => $my_profiles,
        'first_profile' => $my_profiles[0],
        'nbr_profiles' => count($my_profiles)
       ]);
    }
    }
  
    public function thisIsMyProfile($my_email=null, $my_profile=null){

        return UsersHelpers::itIsMyProfile($my_email,$my_profile);
    }

}
