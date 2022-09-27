<?php
namespace App\helpers;

use App\Models\Menu;
use App\Models\Role;

class MenusHelpers
{
    /**MENU**/
    // générer les menus et sous menus en fonction du profil de l'utilisateur
    public static function chargerMenu($choixaff, $user_id){
        if($choixaff == 1){
            return Menu::join('roles','menus.id','=','roles.menu_id')
            ->join('profils','roles.profil_id','=','profils.id')
            ->join('avoir_profils','avoir_profils.profil_id','=','profils.id')
            ->join('users','users.id','=','avoir_profils.user_id')
            ->where([['menus.niveau', 1], ['users.id',$user_id], ['roles.role_sate', 1], ['menus.lien', '<>', 'Liensimple']])
            ->select('menus.titre', 'menus.lien', 'menus.id', 'menus.icone')
            ->orderBy('menus.ordre', 'ASC')
            ->get();
        }
        if($choixaff == 2){
            return Menu::join('roles','menus.id','=','roles.menu_id')
            ->join('profils','roles.profil_id','=','profils.id')
            ->join('avoir_profils','avoir_profils.profil_id','=','profils.id')
            ->join('users','users.id','=','avoir_profils.user_id')
            ->where([['menus.niveau', 2], ['users.id',$user_id], ['roles.role_sate', 1], ['menus.lien', '!=', 'Liensimple']])
            ->select('menus.titre', 'menus.lien', 'menus.id', 'menus.sousmenu')
            ->orderBy('menus.ordre', 'ASC')
            ->get();
        }
    }
}
