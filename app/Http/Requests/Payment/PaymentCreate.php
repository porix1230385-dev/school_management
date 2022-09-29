<?php

namespace App\Http\Requests\Payment;

use Illuminate\Support\Facades\Request;
// use Illuminate\Foundation\Http\FormRequest;

class PaymentCreate extends Request
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
            'student_id'=>'required',
            'classes' => 'required',
            'mtn' => 'required',
        ];
    }

}
