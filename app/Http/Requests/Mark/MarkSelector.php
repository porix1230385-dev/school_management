<?php

namespace App\Http\Requests\Mark;

use Illuminate\Foundation\Http\FormRequest;

class MarkSelector extends FormRequest
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
            'exam_id' => 'sometimes|nullable|exists:exams,id',
            'class_section_id' => 'required|exists:class_sections,id',
            'subject_id' => 'required|exists:subjects,id',
        ];
    }

    public function attributes()
    {
        return  [
            'exam_id' => 'Exam',
            'class_section_id' => 'ClassSection',
            'subject_id' => 'Subject',
        ];
    }
}
