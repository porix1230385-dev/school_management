<?php
namespace App\helpers;

// use App\Models\Eleve;
use Carbon\Carbon;
use App\Models\Classe;
// use App\Models\Enseigner;
use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Enseignant;
use App\Models\EstEnseigner;
use App\Models\ClasseSecondaire;
use Illuminate\Support\Facades\DB;

class Qs
{
    
        /**MATIERES**/
    
     // voir si la matiere existe
     public static function findSubject($mat_id) {
        return  Matiere::where('matieres.id',$mat_id)->first();
     }
 
     // voir si la matière est enseigner au secondaire
     public static function IsSecondarySubject($mat_id) 
     {
         return  ClasseSecondaire::join('enseigners','enseigners.classe_secondaire_id','=','classe_secondaires.id')
         ->where('enseigners.matiere_id',$mat_id)
         ->first();
     }
 
    //  // voir si la matière est enseigner au primaire
    //  public static function IsSecondarySubject($matiere_id) 
    //  {
        
    //  }

    public static function getAllEnseignantBySubject($subject_id)
    {
        return Enseignant::join('users','users.id','=','enseignants.user_id')
        ->join('enseigners','enseigners.enseignant_id','=','enseignants.id')
        ->join('matieres','matieres.id','=','enseigners.matiere_id')
        ->join('classe_secondaires','classe_secondaires.id','=','enseigners.classe_secondaire_id')
        ->join('classes','classes.id','=','classe_secondaires.classe_id')
        ->where('enseigners.matiere_id',$subject_id)
        ->select('users.nom','users.prenom','users.email','users.genre','matieres.nom_matiere','matieres.abreviation','classes.libelle_classe')
        ->get();
    }

    
    public static function getTeacherInfosBysubjectID($subject_id,$se_classe_id)
    {
        return Enseignant::join('users','users.id','=','enseignants.user_id')
        ->join('enseigners','enseigners.enseignant_id','=','enseignants.id')
        ->join('matieres','matieres.id','=','enseigners.matiere_id')
        ->join('classe_secondaires','classe_secondaires.id','=','enseigners.classe_secondaire_id')
        ->join('classes','classes.id','=','classe_secondaires.classe_id')
        ->where([
                'enseigners.matiere_id'=>$subject_id,
                'enseigners.classe_secondaire_id'=>$se_classe_id
            ])
        ->select('users.nom','users.prenom','users.email','users.genre','matieres.nom_matiere','matieres.abreviation','classes.libelle_classe')
        ->first();
    }

    public static function getAllEnseignantBySClasse($se_classe_id)
    {
        return Enseignant::join('users','users.id','=','enseignants.user_id')
        ->join('enseigners','enseigners.enseignant_id','=','enseignants.id')
        ->join('matieres','matieres.id','=','enseigners.matiere_id')
        ->join('classe_secondaires','classe_secondaires.id','=','enseigners.classe_secondaire_id')
        ->join('classes','classes.id','=','classe_secondaires.classe_id')
        ->where('enseigners.classe_secondaire_id',$se_classe_id)
        ->select('users.nom','users.prenom','users.email','users.genre','matieres.nom_matiere','matieres.abreviation','classes.libelle_classe')
        ->get();
    }

    // get teacher (enseignant) subject 
    public static function getTeacherClasses($teacher) // enseignant
    {
       return  $enseignants =  Enseignant::join('users','users.id','=','enseignants.user_id')
        ->join('enseigners','enseigners.enseignant_id','=','enseignants.id')
        // ->join('matieres','matieres.id','=','enseigners.matiere_id')
        ->join('classe_secondaires','classe_secondaires.id','=','enseigners.classe_secondaire_id')
        ->join('classes','classes.id','=','classe_secondaires.classe_id')
        ->where('enseigners.enseignant_id',$teacher)
        ->select('classes.libelle_classe as classe_lib')//,'classes.libelle_classe as classe_lib',DB::raw("COUNT(enseigners.matiere_id) as nbr_matiere"),DB::raw("COUNT(enseigners.classe_secondaire_id) as nbr_classe")
        ->distinct('enseigners.classe_secondaire_id') //'users.*','enseignants.matricule as matricule',
        ->groupBy('enseigners.id') 
        ->get();
    }

    // get teacher (enseignant) classes
    public static function  getTeacherSubject($teacher) //enseignant
    {
       return  $enseignants =  Enseignant::join('users','users.id','=','enseignants.user_id')
        ->join('enseigners','enseigners.enseignant_id','=','enseignants.id')
        ->join('matieres','matieres.id','=','enseigners.matiere_id')
        // ->join('classe_secondaires','classe_secondaires.id','=','enseigners.classe_secondaire_id')
        // ->join('classes','classes.id','=','classe_secondaires.classe_id')
        ->where('enseigners.enseignant_id',$teacher)
        ->select('matieres.nom_matiere as nom_matiere','matieres.abreviation as abreviation')//,'classes.libelle_classe as classe_lib',DB::raw("COUNT(enseigners.matiere_id) as nbr_matiere"),DB::raw("COUNT(enseigners.classe_secondaire_id) as nbr_classe")
        ->distinct('enseigners.matiere_id') //'users.*','enseignants.matricule as matricule',
        ->groupBy('enseigners.id') 
        ->get();
    }


    /**CLASSES **/
    public static function IsSecondaryClass($cl_id)
    {
        return Classe::join('classe_secondaires','classe_secondaires.classe_id','=','classes.id')
        ->where('classe_secondaires.classe_id',$cl_id)
        ->select('classe_secondaires.id','classes.libelle_classe')
        ->first();
    }

    // primary classe
    public static function IsPrimaryClass($pcl_id)
    {
        return Classe::join('classe_primaires','classe_primaires.classe_id','=','classes.id')
                    ->where('classe_primaires.classe_id',$pcl_id)
                    ->select('classe_primaires.id','classes.libelle_classe')
                    ->first();
    }

    // get all subject by level_id
    public static function getAllSubjectByLevel($level_id)
    {
        return Matiere::join('est_enseigners','est_enseigner.matiere_id','=','matieres.id')
                ->join('matieres','matieres.id','=','est_enseigners.matiere_id')
                ->join('niveaux', 'niveaux.id', '=', 'est_enseigners.niveau_id')
                ->join('classes','classes.niveau_id','=','niveaux.id')
                ->where('classes.id',$level_id)
                ->select('matieres.nom_matiere','niveaux.libelle_niveau','classes.libelle_classe');
                
    }

   public static function getDaysOfWeek()
   {
        return $daysOfWeek = ['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimance'];
   }

    public static function getTeamSA()
    {
        return ['admin', 'super_admin'];
    }

    public static function getTeamAccount()
    {
        return ['admin', 'super_admin', 'accountant'];// accountant comptable
    }

    public static function getTeamSAT()
    {
        return ['admin', 'super_admin', 'teacher'];
    }

    public static function getTeamAcademic()
    {
        return ['admin', 'super_admin', 'teacher', 'student'];
    }

    public static function getTeamAdministrative()
    {
        return ['admin', 'super_admin', 'accountant'];
    }
    public static function getUserRecord($remove = [])
    {
        $data = ['name','lastname', 'email', 'phone', 'phone2', 'dob', 'gender', 'address', 'bg_id', 'nal_id', 'state_id', 'lga_id'];

        return $remove ? array_values(array_diff($data, $remove)) : $data;
    }

    public static function userIsTeamAccount()
    {
        return in_array(Auth::user()->user_type, self::getTeamAccount());
    }

    public static function userIsTeamSA()
    {
        return in_array(Auth::user()->user_type, self::getTeamSA());
    }

    public static function userIsTeamSAT()
    {
        return in_array(Auth::user()->user_type, self::getTeamSAT());
    }

    public static function userIsAcademic()
    {
        return in_array(Auth::user()->user_type, self::getTeamAcademic());
    }

    public static function userIsAdministrative()
    {
        return in_array(Auth::user()->user_type, self::getTeamAdministrative());
    }

    public static function userIsAdmin()
    {
        return Auth::user()->user_type == 'admin';
    }

    // public static function getUserType()
    // {
    //     return Auth::user()->user_type;
    // }

    

    public static function userIsSuperAdmin()
    {
        return Auth::user()->user_type == 'super_admin';
    }

    public static function userIsStudent()
    {
        return Auth::user()->user_type == 'student';
    }

    public static function userIsTeacher()
    {
        return Auth::user()->user_type == 'teacher';
    }

    public static function userIsParent()
    {
        return Auth::user()->user_type == 'parent';
    }
    
    public static function userIsPTA()
    {
        return in_array(Auth::user()->user_type, self::getPTA());
    }

    public static function userIsMyChild($student_id, $parent_id)
    {
        $data = ['user_id' => $student_id, 'my_parent_id' => $parent_id];
        return StudentRecord::where($data)->exists();
    }

    public static function getSRByUserID($user_id)
    {
        return StudentRecord::where('user_id', $user_id)->first();
    }

    public static function getPTA()
    {
        return ['super_admin', 'admin', 'teacher', 'parent'];
    }

    public static function getMarkType($class_type)
    {
        switch ($class_type) {
            case 'P':
                return 'primaire';
            case 'PC':
                return 'premier_cycle';
            case 'SC':
                return 'second_cycle';
        }
        return $class_type;
    }

    // public static function DateFormat($day,$month,$year)
    // {
    //     $dt = Carbon::create($day,$month,$year);
    //    return $dt; 
    // }

    // public static function VerifIfDateEval()
    // verifier si j'enseigne la matiere dans cette classe
    public static function CheckIfSubjectIsTaught($level_id, $sub_id)
    {
        // get class level
        // $classe = Classe::find($cl_id)->first();
        // if(empty($classe)) return false;
        // // dd($classe);
        // // get class level id
        // $class_level_id = $classe->niveau_id;
        $class_level = Niveau::where('niveaux.id',$level_id)->first();
        // dd($class_level);
        // check if subject is taught in the class 

       $verif = EstEnseigner::where([
            'niveau_id'=>$class_level->id,
            'matiere_id'=>$sub_id
        ])->get();
        if(!empty($verif)){return true;}else{return false;}

    }
}