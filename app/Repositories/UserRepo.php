<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Profil;
// use App\Models\UserType;
// use App\Models\BloodGroup;
// use App\Models\StaffRecord;


class UserRepo
{


    public function update($id, $data)
    {
        return User::find($id)->update($data);
    }

    public function delete($id)
    {
        return User::destroy($id);
    }

    public function create($data)
    {
        return User::create($data);
    }

    // public function getUserByType($type)
    // {
    //     return User::where(['user_type' => $type])->orderBy('nom', 'asc')->get();
    // }

    public function getAllTypes()
    {
        return Profil::all();
    }

    public function findType($id)
    {
        return Profil::find($id);
    }

    // find by id
    public function find($id)
    {
        return User::find($id);
    }
    // find by email 
    public function findByEmail($email)
    {
        return User::where('email',$email)->get();
    }

    public function getAll()
    {
        return User::orderBy('nom', 'asc')->get();
    }

    // public function getPTAUsers()
    // {
    //     return User::where('user_type', '<>', 'student')->orderBy('name', 'asc')->get();
    // }

    /********** STAFF RECORD ********/
    // public function createStaffRecord($data)
    // {
    //     return StaffRecord::create($data);
    // }

    // public function updateStaffRecord($where, $data)
    // {
    //     return StaffRecord::where($where)->update($data);
    // }

    /********** BLOOD GROUPS ********/
    // public function getBloodGroups()
    // {
    //     return BloodGroup::orderBy('name')->get();
    // }
}
