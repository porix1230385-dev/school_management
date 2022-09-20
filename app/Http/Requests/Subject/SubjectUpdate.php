<?php

namespace App\Http\Requests\Subject;

use App\Helpers\Qs;
use Illuminate\Foundation\Http\FormRequest;

class SubjectUpdate extends FormRequest
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
            'name' => 'required|string|min:3',
            'slug' => 'nullable|string|min:3',
        ];
    }

    public function attributes()
    {
        return  [
            'slug' => 'Short Name',
        ];
    }

    protected function getValidatorInstance()
    {
        $input = $this->all();

        $this->getInputSource()->replace($input);

        return parent::getValidatorInstance();
    }
}
