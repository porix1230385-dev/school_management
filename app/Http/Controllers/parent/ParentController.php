<?php
namespace App\Http\Controllers\parent;

class ParentController extends Controller
{
    public function getMyChildren()
    {
        // get more information 
        // $childrens = Eleve::join('inscrires as ins','ins.eleve_id','=','eleves.id');
    }
}