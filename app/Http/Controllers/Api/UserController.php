<?php

namespace App\Http\Controllers\Api;
 
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'nom' => ['required','string','max:100'],
        //     'prenom' => ['required','string','max:100'],
        //     'matricule' => ['required','string','max:100','unique:users'],
        //     'email' => ['required','email','unique:users'],
        //     'genre'=>['required','string','max:25'],
        //     'telephone1' =>['required','string','max:30'],
        //     'password' => ['required','min:8']
        // ]);

        $rules = array(
            'nom' => ['required','string','max:100'],
            'prenom' => ['required','string','max:100'],
            'matricule' => ['required','string','max:100','unique:users'],
            'email' => ['required','email','unique:users'],
            'genre'=>['required','string','max:25'],
            'telephone1' =>['sometimes','nullable','string','max:30'], //,'required'
            'password' => ['required','min:8']
        );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // On crée un nouvel utilisateur
        // $user = User::create([
        //     'nom' => $request->nom,
        //     'prenom' => $request->prenom,
        //     'matricule' => $request->matricule,
        //     'email' => $request->email,
        //     'genre' => $request->genre,
        //     'telephone1' => $request->telephone1,
        //     'password' => Hash::make($request->password),
        // ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->nom;
   
        return $this->sendResponse($success, 'User register successfully.');
        // On retourne les informations du nouvel utilisateur en JSON
        // return response()->json([
        //     'success' => true,
        //     'message'=>'création de compte effectué',
        //     'informations posteés'=>$user
        // ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        User::find($user->id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       $rules = array(
        'nom' => ['required','string','max:100'],
        'prenom' => ['required','string','max:100'],
        'matricule' => ['required','string','max:100'],
        'email' => ['required','email'],
        'genre'=>['required','string','max:25'],
        'telephone1' =>['sometimes','nullable','string','max:30'], //,'required'
        'password' => ['required','min:8']
    );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }

        // On modifie les informations de l'utilisateur
        $user->update($request->all());
       
         // On retourne la réponse JSON
         return response()->json([
            'success' => true,
            'message' => 'Vos informations ont été mise à jour.',
         ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();

        // On retourne la réponse JSON
        return response()->json([
            'success' => true,
            'message' => 'suppression effectuée avec success'
        ]);
    }
}
