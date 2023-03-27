<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesUpdateRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'CourseLink' => ['required','url'],
            'CourseName' => ['required'],
            //'CourseLogo' => ['required'],
            'CourseDesc' => ['required','min:10','max:256'],
            'CourseType_id' => ['required'],
            'FullQty'=> ['required','integer','min:10','max:500'],
            'State' => ['required']
        ];
    }
}
