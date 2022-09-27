<?php

namespace App\Repositories;

use App\Models\Cycle;
use App\Models\Serie;
use App\Models\MyClass;
use App\Models\Section;
use App\Models\Subject;
use App\Models\ClassType;
use App\Models\ClassSection;
use App\Models\ClassSubject;
// use App\Models\Teach;
// use App\Models\TeacherRecord;

class MyClassRepo
{

    public function all()
    {
        return MyClass::orderBy('class_type_id', 'asc')->with('class_type')->get();
    }
    

    public function getMC($data)
    {
        return MyClass::where($data)->first();
    }

    public function find($id)
    {
        return MyClass::find($id);
    }

    public function create($data)
    {
        return MyClass::create($data);
    }

    public function update($id, $data)
    {
        return MyClass::find($id)->update($data);
    }

    public function delete($id)
    {
        return MyClass::destroy($id);
    }

    // cycle 
    public function getTypes()
    {
        return Cycle::orderBy('libelle_cycle', 'asc')->get();
    }

    public function findType($class_type_id)
    {
        return ClassType::find($class_type_id);
    }

    public function findTypeByClass($class_id)
    {
        return ClassType::find($this->find($class_id)->class_type_id);
    }

    public function findTypeByClassSection($class_section_id)
    {

        return ClassType::join('my_classes', 'my_classes.class_type_id', '=', 'class_types.id')
            ->join('class_sections', 'class_sections.my_class_id', '=', 'my_classes.id')
            ->where('class_sections.id', $class_section_id)
            ->select('class_types.*')
            ->first();
    }

    /************* Section *******************/

    public function createSection($data)
    {
        return Section::create($data);
    }

    public function findSection($id)
    {
        return Section::find($id);
    }

    public function updateSection($id, $data)
    {
        return Section::find($id)->update($data);
    }

    public function deleteSection($id)
    {
        return Section::destroy($id);
    }

    public function isActiveSection($section_id)
    {
        return Section::where(['id' => $section_id, 'active' => 1])->exists();
    }

    public function getAllSections()
    {
        return Section::orderBy('name', 'asc')->get();
    }

    public function getClassSections($class_id)
    {
        return ClassSection::join('my_classes', 'my_classes.id', '=', 'class_sections.my_class_id')
            ->where('my_classes.id', $class_id)
            ->select('class_sections.*')
            ->with(['my_class', 'section'])
            ->get();
    }

    public function getCS($data)
    {
        return ClassSection::where($data)->with(['my_class', 'section'])->get();
    }

    public function IsSection($my_name)
    {

        return Section::where('name', $my_name)->exists();
    }

    /************* Class Section *******************/


    public function getAllClassSections()
    {

        return ClassSection::orderBy('id', 'asc')->with(['my_class', 'section'])->get();
    }

    public function findAllClassSections()
    {

        return ClassSection::all();
    }

    public function getClassByClassSection($class_section_id)
    {

        $class_section = ClassSection::find($class_section_id);
        return MyClass::find($class_section->my_class_id);
    }

    public function getSectionByClassSection($class_section_id)
    {
        $class_section = ClassSection::find($class_section_id);
        return Section::find($class_section->section_id);
    }

    public function findClassSectionByTeacher($user_id)
    {
        return ClassSection::join('teaches', 'teaches.class_section_id', '=', 'class_sections.id')
            ->join('teacher_records', 'teacher_records.id', '=', 'teaches.teacher_id')
            ->where('teacher_records.user_id', $user_id)
            ->select('class_sections.*')
            ->with(['my_class', 'section'])
            ->get();
    }

    /************* Subject *******************/

    public function createSubject($data)
    {
        return Subject::create($data);
    }

    public function findSubject($id)
    {
        return Subject::find($id);
    }

    public function findSubjectByClass($class_id)
    {
        return Subject::join('class_subjects', 'class_subjects.subject_id', '=', 'subjects.id')
            ->join('my_classes', 'my_classes.id', '=', 'class_subjects.my_class_id')
            ->where('class_subjects.my_class_id', $class_id)
            ->select('subjects.*')
            ->get();
    }

    public function findSubjectByTeacher($user_id)
    {
        return Subject::join('teacher_records', 'teacher_records.subject_id', '=', 'subjects.id')
            ->where('teacher_records.user_id', $user_id)
            ->select('subjects.*')
            ->get();
    }

    public function getSubject($data)
    {
        return Subject::where($data);
    }

    public function getSubjectsByIDs($ids)
    {
        return Subject::whereIn('id', $ids)->orderBy('name')->get();
    }

    public function updateSubject($id, $data)
    {
        return Subject::find($id)->update($data);
    }

    public function deleteSubject($id)
    {
        return Subject::destroy($id);
    }

    public function getAllSubjects()
    {
        // return Subject::orderBy('name', 'asc')->with(['my_class', 'teacher'])->get(); // old code
        // get concerned records by teacher who teaches to the class
        return Subject::join('class_subjects', 'class_subjects.subject_id', '=', 'subjects.id') // récupérer toutes les matières associées à une classe...
            ->orderBy('name', 'asc')
            ->get();
    }

    public function getSubjectCoef($class_section_id, $subject_id)
    {
        $my_class_id = $this->getClassByClassSection($class_section_id)->id;
        $subject = ClassSubject::join('subjects', 'subjects.id', '=', 'class_subjects.subject_id')
            ->join('my_classes', 'my_classes.id', '=', 'class_subjects.my_class_id')
            ->where('subjects.id', $subject_id)
            ->where('my_classes.id', $my_class_id)
            ->select('class_subjects.coef')
            ->first();
        return $subject;
    }

    /************* Serie *******************/

    public function createSerie($data)
    {
        return Serie::create($data);
    }

    public function getAllSeries()
    {
        return Serie::orderBy('name', 'asc')->get();
    }

    public function getClassType($class_type_id)
    {

        return Serie::where(['class_type_id' => $class_type_id,])->get();
    }

    public function getSerieIdByName($serie_name)
    {
        return Serie::find($serie_name, ['id']);
    }

    public function AddSerie($value)
    {

        if (!Serie::where('name', $value)->exists()) {

            $d = [
                'name' => $value,
                'class_type_id' => 3
            ];
            $result = Serie::create($d);

            return $result;
        }
    }
}
