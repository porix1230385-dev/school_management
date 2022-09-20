<?php

namespace App\Http\Requests\Section;

use App\Helpers\Qs;
use Illuminate\Foundation\Http\FormRequest;

class SectionCreate extends FormRequest
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
            'my_class_id' => 'required'
        ];
    }

    public function attributes()
    {
        return  [
            'my_class_id' => 'Class',
        ];
    }

    protected function getValidatorInstance()
    {
        $input = $this->all();

        $this->getInputSource()->replace($input);

        return parent::getValidatorInstance();
    }

}
