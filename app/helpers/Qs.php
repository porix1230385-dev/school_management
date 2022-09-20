<?php
namespace App\helpers;

// use App\Models\Eleve;
use Carbon\Carbon;
use App\Models\Jour;
// use App\Models\Enseigner;
use App\Models\Classe;
use App\Models\Niveau;
use App\Models\Absence;
use App\Models\Matiere;
use App\Models\Periode;
use App\Models\Setting;
use App\Models\Inscrire;
use App\Models\Versement;
use App\Models\Enseignant;
use App\Models\AvoirProfil;
use App\Models\EstEnseigner;
use App\Models\AnneeScolaire;
use App\Models\MatiereClassett;
use App\Models\ClasseSecondaire;
use App\Models\ModalityPayement;
use App\Models\VersementScolarite;
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
        ->select('classes.id as id_classe','classes.libelle_classe as classe_lib','classe_secondaires.id as cls_id')//,'classes.libelle_classe as classe_lib',DB::raw("COUNT(enseigners.matiere_id) as nbr_matiere"),DB::raw("COUNT(enseigners.classe_secondaire_id) as nbr_classe")
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
        ->select('matieres.id as id_matiere','matieres.nom_matiere as nom_matiere','matieres.abreviation as abreviation')//,'classes.libelle_classe as classe_lib',DB::raw("COUNT(enseigners.matiere_id) as nbr_matiere"),DB::raw("COUNT(enseigners.classe_secondaire_id) as nbr_classe")
        ->distinct('enseigners.matiere_id') //'users.*','enseignants.matricule as matricule',
        ->groupBy('enseigners.id') 
        ->get();
    }

    public static function getTeacherSubjectClasse($teacher) {
       
           return  $enseignants =  Enseignant::join('users','users.id','=','enseignants.user_id')
            ->join('enseigners','enseigners.enseignant_id','=','enseignants.id')
            ->join('matieres','matieres.id','=','enseigners.matiere_id')
            ->join('classe_secondaires','classe_secondaires.id','=','enseigners.classe_secondaire_id')
            ->join('classes','classes.id','=','classe_secondaires.classe_id')
            ->where('enseigners.enseignant_id',$teacher)
            ->select(
                    'matieres.id as id_matiere',
                    'matieres.nom_matiere as nom_matiere',
                    'matieres.abreviation as abreviation',
                    'classes.id as id_classe',
                    'classes.libelle_classe as classe_lib'
                    ,'classe_secondaires.id as cls_id'
                )//,'classes.libelle_classe as classe_lib',DB::raw("COUNT(enseigners.matiere_id) as nbr_matiere"),DB::raw("COUNT(enseigners.classe_secondaire_id) as nbr_classe")
            ->distinct('enseigners.matiere_id') //'users.*','enseignants.matricule as matricule',
            ->groupBy('enseigners.id') 
            ->get();
    }

    // get classe time table
    public static function getTimetableByClass(int $cl_id){
        // $classe = Classe::where('id', $cl_id)->get();
        // dd($cl_id);
        $days = self::getDaysOfTheWeek();
        // dd($days);
        foreach ($days as $day) {
            // dd($day);
            $timeT = MatiereClassett::join('matieres','matieres.id','=','matiere_classetts.matiere_id')
                    ->join('classes','classes.id','=','matiere_classetts.classe_id')
                    ->join('jours','jours.id','=','matiere_classetts.jour_id')
                    ->where(
                            [
                                'jours.id' => $day->id,
                                'classes.id'=>$cl_id,
                                // 'matiere_classetts.matiere_id'=>$my_classe_subject->id_matiere
                            ])
                    ->select(
                        'matiere_classetts.hm_debut as heure_debut',
                        // 'matiere_classetts.jour_id as id_jour',
                        'matiere_classetts.duree_H as duree',
                        // DB::select("SELECT mat.id, mat.nom_matiere, mat.abreviation  FROM matieres as mat where mat.id = $my_classe_subject->id_matiere "),
                        // DB::select("SELECT c.id, c.libelle_classe FROM classes as c where c.id = $my_classe_subject->id_classe"),
                        'matieres.id as id_subject',
                        'matieres.nom_matiere as subject',
                        // 'classes.id as id_classe',
                        // 'classes.libelle_classe as classe'
                        )
                        // ->groupBy(

                        //         'matiere_classetts.hm_debut',
                        //         'matiere_classetts.duree_H',
                        //         'matieres.id',
                        //         'matieres.nom_matiere')
                            // ->distinct('matiere_classetts.matiere_id')
                        ->get();

                        // get time of 
                    //   echo gettype($timeT);
                    //     die();
                        $result = self::getDateFormat($timeT);
                        
                        $day['hours'] = $result;
                        // dd($timeT);
        }
        // return $day['timeTable'];
        return $days;
    }

    // get Absences By Student
    public static function getAbsencesByStudent(int $std_id, int $sjt_id)
    {
        $periods = self::getAllPeriods();
        // $anneeScolaire = self::getAnneeScolaireByID();    
        foreach($periods as $period)
        {
            
            // $std_id = $child->student_id;
            // $sjt_id = $subject->id_subject;
            $p_id = $period->id;
            // dd($p_id);
            $H_Absences = Absence::join('seance_matieres as sm','absences.seance_matiere_id','=','sm.id')
            ->join('matieres','matieres.id','=','sm.matiere_id')
            ->join('periodes as pr','pr.id','=','absences.periode_id')
            ->join('eleves','eleves.id','=','absences.eleve_id')
            ->where([
                    'eleves.id' => $std_id,
                    'matieres.id' => $sjt_id,
                    'pr.id' => $p_id
                ])
            ->select(
                    // 'pr.libelle_periode as periode',
                    'absences.nbre_heure_absence as nbrHeureAbs',
                    // DB::raw('SUM(nbre_heure_absence) as totalAbsHours'),
                    // DB::raw('SUM(absences.nbre_heure_absence) as total_absence_hours')
                    // DB::raw('select SUM(absences.nbre_heure_absence) as totalAbsHours')
                    )
            // ->groupBy(
            //         'pr.libelle_periode',
            //         'absences.nbre_heure_absence'
            //     )
                ->get();
                // dd($H_Absences)
                // ->sum('nbrHeureAbs');
                $ttAbs = self::calculAbs($H_Absences);
                $period['total_hours_abs'] = $ttAbs;
                // $period['total_hours_abs'] = $H_Absences;
        }
        return $periods;
    }

    // get shool frais inscription by level class 
    public static function getScolariteInfo(object $student,$ansco){
        $scolarite_info = Inscrire::join('eleves','eleves.id','=','inscrires.eleve_id')
                            ->join('classes','classes.id','=','inscrires.classe_id')
                            ->join('annee_scolaires as ansco','ansco.id','=','inscrires.annee_scolaire_id')
                            ->where([
                                'eleves.id'=>$student->student_id,
                                // 'eleves.id'=>4,
                                'classes.id'=>$student->id_classe,
                                // 'classes.id'=>62,
                                'ansco.id'=>$ansco
                                ])
                                ->select(
                                    'ansco.libelle_as as annee_scolaire',
                                    'inscrires.date_inscription as date_inscription',
                                    'inscrires.montant_inscription as montant_inscription',
                                    'classes.libelle_classe as classe'
                                    )
                                ->first();
        // $infos_versement = 
        // dd($scolarite_info);
        
        $scolarite_info['details'] = self::getRestToBePaid($scolarite_info,$student,$ansco);
        //  $scolarite_info['versements'] = self::getVersementScolarite($student,$ansco); 
         return $scolarite_info;             // dd($scolarite_info);
    }

    public static function getVersementScolarite(object $stu,$ans){
        $versements = self::getAllVersement();
        // dd($versements);
        foreach($versements as $versement)
        {
            $vers = VersementScolarite::join('versements as vers','vers.id','=','versement_scolarites.versement_id')
            ->join('eleves','eleves.id','=','versement_scolarites.eleve_id')
            ->join('annee_scolaires as ansco','ansco.id','=','versement_scolarites.annee_scolaire_id')
            ->join('inscrires as ins','ins.eleve_id','=','versement_scolarites.eleve_id')
            // ->join('classes','classes.id','=','ins.classe_id')
            ->where([
                // 'eleves.id'=>$stu->student_id,
                'eleves.id'=>$stu->student_id,
                // 'classes.id'=>$stu->id_classe,
                'ansco.id'=>$ans,
                'vers.id'=>$versement->id
                ])
                ->select(
                    'versement_scolarites.montant as somme_verse',
                    'versement_scolarites.avance as avance',
                    'versement_scolarites.date_versement as date_versement'
                    )
                ->get();
                // dd($vers);
            $versement['infos'] = $vers;

        }
        // dd($versements);
        return $versements;
    
    }
    // modality payment
    public static function getRestToBePaid($ins_info,object $stud,$annee_sco)
    {
        // dd($ins_info);
        // echo gettype($ins_info->montant_inscription);
        // die();
        $tb_vers = [];
        // $tb_vers_info = [];
        $tb_info_sco = [];
        $mtn_ins = $ins_info->montant_inscription;
        $mtn_ttc = ModalityPayement::where([
            'niveau_id'=>$stud->id_class_level,
            // 'niveau_id'=>13,
            'naf_af'=>$stud->statut,
            'annee_scolaire_id'=>$annee_sco,
            ])
            ->select('montant_total_scolarite')
            ->first();
            // dd($mtn_ttc);
            if($mtn_ttc == null)
            {
                return "pas de versements ou pas de détails";
            }
            // echo gettype($mtn_ttc->montant_total_scolarite);
            // echo $mtn_ttc->montant_total_scolarite;
            // die();

        // check if montant inscription <= montant total 
        if($mtn_ins == $mtn_ttc->montant_total_scolarite)
        {
           return $tb_info_sco = [
                'message'=>'soldée à l inscription',
                'montant_paye_inscription'=>$mtn_ins,
                'reste'=>$mtn_ttc->montant_total_scolarite - $mtn_ins,
                'montant_total_scolarite'=>$mtn_ttc->montant_total_scolarite
            ];
            // $mtn['etat'] = "soldée";
            // $mtn['reste'] = 0;
            // echo "soldée à l inscription";
        }
        else{

            $vers = VersementScolarite::join('eleves','eleves.id','=','versement_scolarites.eleve_id')
            ->join('annee_scolaires as ansco','ansco.id','=','versement_scolarites.annee_scolaire_id')
            ->join('inscrires as ins','ins.eleve_id','=','versement_scolarites.eleve_id')
            ->join('versements as vers','vers.id','=','versement_scolarites.versement_id')
            ->where([
                'eleves.id'=>$stud->student_id,
                // 'eleves.id'=>4,
                // 'classes.id'=>$stud->id_classe,
                'ansco.id'=>$annee_sco,
                // 'vers.id'=>$versement->id
                ])
                ->select('vers.lib_vers as versement','versement_scolarites.montant as montant_verse')
                ->get();
                // dd($vers);
            foreach ($vers as $ver) {
                (int) $ver->montant_verse;
                // array_push($tb_vers_info,$ver);
                array_push($tb_vers,$ver->montant_verse);
            }
            // dd($tb_vers);
            $mtn_total_paye = (($mtn_ins) + (array_sum($tb_vers)));
            $reste_a_payer = (($mtn_ttc->montant_total_scolarite) - ($mtn_total_paye));
            if($mtn_total_paye == $mtn_ttc->montant_total_scolarite)
            {
                return $tb_info_sco = [
                    'message'=>'soldée',
                    'montant_paye_inscription'=>$mtn_ins,
                    'versements'=>$vers,
                    'total_montant_paye'=>$mtn_total_paye,
                    'reste'=>$reste_a_payer,
                    'montant_total_scolarite'=>$mtn_ttc->montant_total_scolarite
                ];
            }
            else{

                return $tb_info_sco = [
                'etat'=>'non soldée',
                'montant_paye_inscription'=>$mtn_ins,
                'versements'=>$vers,
                'total_montant_paye'=>$mtn_total_paye,
                'reste'=>$reste_a_payer,
                'montant_total_scolarite'=>$mtn_ttc->montant_total_scolarite
                ];
            }
            // dd($mtn_total_paye);
            
            // echo "soldée par modality";
            // echo " montant payé : $mtn_total_paye, reste à payer $reste_a_payer";
            // // die();
        }       
                        
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

    public static function getDaysOfTheWeek()
    {
        return Jour::select('id','jour_name')->get();
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
        // return AvoirProfil::where(['user_id'=> Auth::user()->id,'lib_profil'=>'admin'])->get();
        return AvoirProfil::where(['user_id'=> Auth::user()->id,'profil_id'=>7])->get();
        // return Auth::user()->user_type == 'admin';
    }

    // public static function getUserType()
    // {
    //     return Auth::user()->user_type;
    // }

    

    public static function userIsSuperAdmin()
    {
        // return AvoirProfil::where(['user_id'=> Auth::user()->id,'lib_profil'=>'super_admin'])->get();
        return AvoirProfil::where(['user_id'=> Auth::user()->id,'profil_id'=>8])->get();
        // return Auth::user()->user_type == 'super_admin';
    }

    public static function userIsStudent()
    {
        // return AvoirProfil::where(['user_id'=> Auth::user()->id,'lib_profil'=>"eleve"])->get();
        return AvoirProfil::where(['user_id'=> Auth::user()->id,'profil_id'=>4])->get();
        // return Auth::user()->user_type == 'student';
    }

    public static function userIsTeacher_E()
    {
        // return AvoirProfil::where(['user_id'=> Auth::user()->id,'lib_profil'=>"enseignant"])->get();
        return AvoirProfil::where(['user_id'=> Auth::user()->id,'profil_id'=>2])->get();
        // Auth::user()->user_type == 'teacher';
    }
    public static function userIsTeacher_I()
    {
        // return AvoirProfil::where(['user_id'=> Auth::user()->id,'lib_profil'=>'instituteur'])->get();
        return AvoirProfil::where(['user_id'=> Auth::user()->id,'profil_id'=>1])->get();
        // Auth::user()->user_type == 'teacher';
    }

    public static function userIsParent()
    {
        // return AvoirProfil::where(['user_id'=> Auth::user()->id,'lib_profil'=>'parent'])->get();
        return AvoirProfil::where(['user_id'=> Auth::user()->id,'profil_id'=>3])->get();
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
        return ['super_admin', 'admin', 'enseignant', 'parent','instituteur'];
        // return [8,7,2,4,1];
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

    public static function getDateFormat(object $objs)
    {
        // $tb_hours = [];
        foreach ($objs as $obj)
        {
            // if($obj->)
            $heure_d = $obj->heure_debut;
            $duree = (int) $obj->duree;
            $tb_hours = explode(':', $obj->heure_debut);
            // $tb = self::parseToInt($tb_hours);
            $h = (int) $tb_hours[0]; 
            $m = (int) $tb_hours[1]; 
            $s = (int) $tb_hours[2]; 
            $dt = Carbon::createFromTime($h,$m,$s);
            $dt->addHours($duree);
            $dt->toTimeString();
            $obj['heure_fin']=$dt->format('H:i:s');
                
        }
        
       return $objs; 
    }

    // calcul absences hours by student
    public static function calculAbs(object $objects)
    {
        $tb_abs = [];
        foreach ($objects as $object) {
            array_push($tb_abs,$object->nbrHeureAbs);
        }
        return array_sum($tb_abs);
    }
   
    // parse to int 
    public static function parseToInt($tbs)
    {
        foreach ($tbs as $tb) {
            (int) $tb;
        }
        return $tbs;
    }

    // public static function VerifIfDateEval()

    // get all periods
    public static function getAllPeriods()
    {
       return Periode::select('id','libelle_periode')->get();
    }

    // get all annee scolaire
    public static function getAnneeScolaireByID($id_an_sc)
    {
       return AnneeScolaire::where('id',$id_an_sc)->first();
    }
    
    public static function getAllVersement()
    {
        return Versement::select('id','lib_vers')->get();
    }
    
    public static function getCurrentSession()
    {
        return self::getSetting('current_session');
    }

    public static function getSetting($type)
    {
        return Setting::where('type', $type)->first()->description;
    }

    public static function getPublicUploadPath()
    {
        return 'uploads/';
    }

    public static function getUserUploadPath()
    {
        return 'uploads/' . date('Y') . '/' . date('m') . '/' . date('d') . '/';
    }

    public static function getUploadPath($user_type)
    {
        return 'uploads/' . $user_type . '/';
    }

    public static function getFileMetaData($file)
    {
        //$dataFile['name'] = $file->getClientOriginalName();
        $dataFile['ext'] = $file->getClientOriginalExtension();
        $dataFile['type'] = $file->getClientMimeType();
        $dataFile['size'] = self::formatBytes($file->getSize());
        return $dataFile;
    }

    public static function generateUserCode()
    {
        return substr(uniqid(mt_rand()), -7, 7);
    }

    public static function formatBytes($size, $precision = 2)
    {
        $base = log($size, 1024);
        $suffixes = array('B', 'KB', 'MB', 'GB', 'TB');

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
    }


    public static function getNextSession()
    {
        $oy = self::getCurrentSession();
        $old_yr = explode('-', $oy);
        return ++$old_yr[0] . '-' . ++$old_yr[1];
    }

    
    public static function json($msg, $ok = TRUE, $arr = [])
    {
        return $arr ? response()->json($arr) : response()->json(['ok' => $ok, 'msg' => $msg]);
    }

    public static function jsonStoreOk()
    {
        return self::json(__('msg.store_ok'));
    }

    public static function jsonStoreAlreadyExists()
    {
        return self::json(__('msg.store_already_exists'), false);
    }

    public static function jsonUpdateOk()
    {
        return self::json(__('msg.update_ok'));
    }

    public static function storeOk($routeName)
    {
        return self::goWithSuccess($routeName, __('msg.store_ok'));
    }

    public static function deleteOk($routeName)
    {
        return self::goWithSuccess($routeName, __('msg.del_ok'));
    }

    public static function updateOk($routeName)
    {
        return self::goWithSuccess($routeName, __('msg.update_ok'));
    }

    public static function goToRoute($goto, $status = 302, $headers = [], $secure = null)
    {
        $data = [];
        $to = (is_array($goto) ? $goto[0] : $goto) ?: 'dashboard';
        if (is_array($goto)) {
            array_shift($goto);
            $data = $goto;
        }
        return app('redirect')->to(route($to, $data), $status, $headers, $secure);
    }

    public static function goWithDanger($to = 'dashboard', $msg = NULL)
    {
        $msg = $msg ? $msg : __('msg.rnf');
        return self::goToRoute($to)->with('flash_danger', $msg);
    }

    public static function goWithSuccess($to, $msg)
    {
        return self::goToRoute($to)->with('flash_success', $msg);
    }


   
}