<?php

namespace App\Repositories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Builder;

// use App\Helpers\Qs;
// use App\Models\ClassSection;
// use App\Models\Dorm;
// use App\Models\Promotion;
// use App\Models\StudentRecord;

class StudentRepo {


    public function findStudentsByClass($class_id,$yearAcademic)
    {
        return Eleve::join('users','users.id','=','eleves.user_id')
                    ->join('inscrires as ins', 'eleves.id', '=', 'ins.eleve_id')
                    ->join('classes', 'classes.id', '=', 'ins.classe_id')
                    ->join('annee_scolaires as ansco', 'ansco.id', '=', 'ins.annee_scolaire_id') 
                    ->where([
                        'classes.id'=>$class_id,
                        'ansco.id'=>$yearAcademic
                        ])
                    ->select('users.nom as nom','users.prenom as prenom','eleves.statut_eleve as statut','eleves.matricule as matricule')
                    ->get();
    }

    // public function findStudentsByClassSection($class_section_id)
    // {
    //     return $this->activeStudents()->where(['class_section_id' => $class_section_id])->with(['user','class_section'])->get()->sortBy('user.name');
    // }

    // public function activeStudents()
    // {
    //     return StudentRecord::where(['grad' => 0]);
    // }

    // public function gradStudents()
    // {
    //     return StudentRecord::where(['grad' => 1])->orderByDesc('grad_date');
    // }

    // public function allGradStudents()
    // {
    //     return $this->gradStudents()->with(['my_class', 'section', 'user'])->get()->sortBy('user.name');
    // }

    // public function findStudentsBySection($sec_id)
    // {
    //     return $this->activeStudents()->where('section_id', $sec_id)->with(['user', 'my_class'])->get();
    // }

    public function createRecord($data)
    {
        return Eleve::create($data);
    }

    public function updateRecord($id, array $data)
    {
        return Eleve::find($id)->update($data);
    }

    // public function update(array $where, array $data)
    // {
    //     return StudentRecord::where($where)->update($data);
    // }

    // public function getRecord(array $data)
    // {
    //     return $this->activeStudents()->where($data)->with('user');
    // }

    // public function getRecordByUserIDs($ids)
    // {
    //     return $this->activeStudents()->whereIn('user_id', $ids)->with('user');
    // }

    // public function findByUserId($st_id)
    // {
    //     return $this->getRecord(['user_id' => $st_id]);
    // }

    // public function getAll()
    // {
    //     return $this->activeStudents()->with('user');
    // }

    // public function getGradRecord($data=[])
    // {
    //     return $this->gradStudents()->where($data)->with('user');
    // }

    // public function getAllDorms()
    // {
    //     return Dorm::orderBy('name', 'asc')->get();
    // }

    // public function exists($student_id)
    // {
    //     return $this->getRecord(['user_id' => $student_id])->exists();
    // }

    // /************* Promotions *************/
    // public function createPromotion(array $data)
    // {
    //     return Promotion::create($data);
    // }

    // public function findPromotion($id)
    // {
    //     return Promotion::find($id);
    // }

    // public function deletePromotion($id)
    // {
    //     return Promotion::destroy($id);
    // }

    // public function getAllPromotions()
    // {
    //     return Promotion::with(['student', 'fc', 'tc', 'fs', 'ts'])->where(['from_session' => Qs::getCurrentSession(), 'to_session' => Qs::getNextSession()])->get();
    // }

    // public function getPromotions(array $where)
    // {
    //     return Promotion::where($where)->get();
    // }

    public function getAllStudentNotIns()
    {
        return Eleve::join('users','users.id','=','eleves.user_id')
        ->whereDoesntHave('inscrires', function (Builder $query) {
        })
        ->select('users.id as ID_User','users.nom as nom','users.prenom as prenom','users.email as email','users.genre as genre','users.adresse as adresse','users.telephone1 as telephone1','eleves.id as ID_Student','eleves.statut_eleve as statut','eleves.matricule as matricule','eleves.date_naissance as date_naissance','eleves.lieu_naissance as lieu_naissance','eleves.nationnalite as nationalite')
        ->orderBy('nom','asc')
        ->get();
    

        // $posts = App\Models\Post::whereDoesntHave('comments', function (Builder $query) {
        //     $query->where('is_active', 1);
        // })->get();
    }

    public function findStudentNotInsByID($student_id)
    {
         return Eleve::join('users','users.id','=','eleves.user_id')
        ->whereDoesntHave('inscrires', function (Builder $query) {
        })
        ->where('eleves.id',$student_id)
        ->select('users.id as ID_User','users.nom as nom','users.prenom as prenom','users.email as email','users.genre as genre','users.adresse as adresse','users.telephone1 as telephone1','eleves.id as ID_Student','eleves.statut_eleve as statut','eleves.matricule as matricule','eleves.date_naissance as date_naissance','eleves.lieu_naissance as lieu_naissance','eleves.nationnalite as nationalite')
        ->orderBy('nom','asc')
        ->first();
    }
   

    // public function getAllStudentIns()
    // {
        // ID_User
        // nom
        // prenom
        // email
        // genre
        // adresse
        // telephone1
        // ID_Student
        // statut
        // matricule
        // date_naissance
        // lieu_naissance
        // nationalite
    // }

}
