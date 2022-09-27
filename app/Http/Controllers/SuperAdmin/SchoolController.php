<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
        
    //     // recuperation des donnees sous forme d'un tableau
    //     $school = School::all();

        
    // // afficher les donnees sur le template index.blade.php
    // return view('pages.super_admin.school.index', compact('school'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('pages.super_admin.school.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|max:255',
    //         'phone' => 'required',
    //         'pays' => 'required|max:255',
    //         'ville' => 'required|max:255',
    //         'commune' => 'required|max:255',
    //         'site' => 'required|max:255',
    //         'fax' => 'required|max:255',
    //         'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
 
    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $validatedData['image'] = "$profileImage";
    //     }
 
    //     $school = School::create($validatedData);
    //     return redirect('pages.super_admin.school.create')->with('success', 'Student created successfully');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
