<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom'=>'sometimes|nullable|string',
            'prenom'=>'sometimes|nullable|string',
            'email' => 'sometimes|nullable|email|max:100|unique:users,id',
            'telephone1' => 'sometimes|nullable|string|min:10|max:20',
            'telephone2' => 'sometimes|nullable|string|min:10|max:20',
            'address' => 'required|string|min:6|max:120',
            // 'matricule' => 'sometimes|nullable|alpha_dash|min:8|max:100|unique:users',
            'photo' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048',
        ];
    }

    public function attributes()
    {
        // return  [
        //     'nal_id' => 'Nationality',
        //     'state_id' => 'State',
        //     'telephone2' => 'Telephone',
        // ];
    }
}
