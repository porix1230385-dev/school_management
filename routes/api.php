<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NoteController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\Api\ClasseController;
use App\Http\Controllers\Api\NiveauController;
use App\Http\Controllers\Api\ParentController;
use App\Http\Controllers\Api\AbsenceController;
use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\TimeTableController;
use App\Http\Controllers\Api\EnseignantController;
use App\Http\Controllers\Api\EvaluationController;
use App\Http\Controllers\Api\InstituteurController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add-code',[UserController::class,'addCode']);

//! Authentication routes
Route::group(['prefix' => 'auth'], function () {
    // logging in
    Route::post('/login', [AuthController::class, 'login']);
    // routes with authentication
    Route::group(['middleware' => 'auth:api'], function () {
        // logging out
        Route::post('/logout', [AuthController::class, 'logout']);
        // user infos
        Route::get('/user', [AuthController::class, 'user']);
    });
});
//Nom d'utilisateur : c1884357c
//Mot de passe : zndvp95h9FpBUNx
// compte messagerie c1884357c@foloschool.management.com mdp = zndvp95h9FpBUNx

// bd Utilisateur: c1884357c_folo_guest_2022_2023
//Base de données: c1884357c_school_management
// username = folo_guest_2022_2023 password = folo2022@2023
//! Account routes
Route::group(['prefix' => 'account'], function () {
    // reset password
    Route::post('/reset-password', [AccountController::class, 'resetPassword']);
    // routes with authentication
    Route::group(['middleware' => 'auth:api'], function () {
        // change password
        Route::put('/change-password', [AccountController::class, 'changePassword']);
    });
});
// Route::get('students', [StudentController::class, 'index']);
Route::get('users', [UserController::class, 'index']);

Route::get('users-profiles/{id}', [ProfilesController::class, 'getUserProfilesByUID']);
Route::get('users-profiles/{my_email}/{my_profile}', [ProfilesController::class, 'thisIsMyProfile']);
//! Student routes
Route::group(['prefix' => 'students'], function () {
    // routes without authentication
    // get all students
    Route::get('/all', [StudentController::class, 'getAllStudents']);
    // get students by parent
    Route::get('/by-parent/{id_parent}', [StudentController::class, 'getStudentsByParent']);
    // // get students by class
    Route::get('/by-class/{my_class_id}', [StudentController::class, 'getStudentsByClass']);
    // // get students by class section
    Route::get('/by-class-level/{class_level}', [StudentController::class, 'getStudentsByClassLevel']);
    // // add absence time
    // Route::post('/absence/add', [AbsenceController::class, 'addAbsenceTime']);
    // // routes with authentication
    // Route::group(['middleware' => 'auth:api'], function () {
    // });
});

// parents routes

Route::group(['prefix' =>'parents'], function (){
    //get all parents 
    // URL::forceRootUrl('http://192.168.1.155');
    Route::get('/all',[ParentController::class,'getAllParents']);
    // get parent by student
    Route::get('/by-student/{student_mat}', [ParentController::class, 'getParentByStudentMatricule']);
    Route::get('/my-children/{parent_id}/{year}', [ParentController::class, 'getMyChildren']);
    // routes with authentication
    // Route::group(['middleware' => 'auth:api'], function () {
    // });

});

/* Enseignants routes*/ 
Route::group(['prefix'=>'Enseignants'],function(){
    Route::get('/all',[EnseignantController::class,'getAllEnseignants']);
    Route::get('by-class/{class_id}',[EnseignantController::class,'getAllEnseignantByClassId']);
    Route::get('/show/{enseignant_id}',[EnseignantController::class,'showTeacherById']);
    Route::get('by-subject/{matiere_id}',[EnseignantController::class,'getAllEnseignantByMatiere']);
    // Route::get('/my-classes',[EnseignantController::class,'getMyClass']);
    // Route::get('/by-level/{level_id}',[ClasseController::class,'getAllClasseByLevel']);
});

/* Instituteurs routes*/ 
Route::group(['prefix'=>'Instituteurs'],function(){
    Route::get('/all',[InstituteurController::class,'getAllIntituteurs']);
    Route::get('show-by-class/{class_id}',[InstituteurController::class,'getInstituteurByClasse_id']);

    // Route::get('/by-level/{level_id}',[ClasseController::class,'getAllClasseByLevel']);
});

/* Niveaux routes*/
Route::group(['prefix'=>'niveaux'],function(){
    Route::get('/all',[NiveauController::class,'getAllClasseLevel']);
    Route::get('/by-cycle/{cycle_id}',[NiveauController::class,'getAllLevelByCycle']);
});

/* classes routes*/ 
Route::group(['prefix'=>'classes'],function(){
    // Route::get('/all',[ClasseController::class,'getAllClasseLevel']);
    Route::get('/by-level/{level_id}',[ClasseController::class,'getAllClasseByLevel']);
});

// Subjects routes
Route::group(['prefix'=>'subjects'],function(){
    Route::get('/all',[SubjectController::class,'getAllSubjects']);
    Route::get('/by-level/{level_id}',[SubjectController::class,'getSubjectsByLevel']);
});

// Evaluations routes
Route::group(['prefix'=>'evaluations'],function(){
    Route::get('/class/{class_id}/subject/{subject_id}',[EvaluationController::class,'getEvaluationBySubjectClasses']);
});

// notes routes
Route::group(['prefix'=>'notes'],function(){
    Route::get('students/class/{class_id}/subject/{subject_id}',[NoteController::class,'getStudentsMarksBySubject']);
});
//! Absences routes
Route::group(['prefix' => 'absences'], function () {
    // routes without authentication
    // add absence time to a student
    Route::post('/add', [AbsenceController::class, 'addAbsenceTime']);
    // get absence time by student
    Route::get('/by-student/{student_id}', [AbsenceController::class, 'getAbsencesByStudent']);
    // delete absence time of a student
    Route::delete('/delete/{absence_id}', [AbsenceController::class, 'deleteAbsence']);
    // routes with authentication
    Route::group(['middleware' => 'auth:api'], function () {
    });
});

// timeTable routes
Route::group(['prefix' => 'timeTable'],function(){
    Route::get('/teacher/{teacher_id}',[TimeTableController::class,'getTeacherTimeTable']);
    Route::get('/classe/{my_class_id}',[TimeTableController::class,'getTimetableByClass']);
});


Route::resource('users', UserController::class);
// Route::resource('students', StudentRecordController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('classes', MyClassController::class);
    // Route::resource('sections', SectionController::class);
    // Route::resource('subjects', SubjectController::class);
    // Route::resource('grades', GradeController::class);
    // Route::resource('exams', ExamController::class);
    // Route::resource('dorms', DormController::class);
    // Route::resource('payments', PaymentController::class);





