<?php

namespace App\Http\Requests;

use App\Models\Courses;
use Illuminate\Foundation\Http\FormRequest;

class CoursesCreteRequest extends FormRequest
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
     *             $table->string('CourseName');
     *       $table->string('CourseLink');
     *       $table->string('CourseLogo')->nullable();
     *       $table->string('CourseDesc')->nullable();
     *       $table->double('CoursePrice')->nullable();
     *       $table->string('CourseType_id');
     *       $table->boolean('IsFree')->default(1);
     *       $table->foreignId('Course_user_id')->constrained('users','id');
     *       $table->integer('Qty')->default(0);
     *       $table->integer('FullQty')->default(0);
     *       $table->boolean('State')->default(0);
     */
    public function rules()
    {    

        return [
            'CourseLink' => ['required','url'],
            'CourseName' => ['required'],
            'CourseLogo' => ['required'],
            'CourseDesc' => ['required','min:10','max:256'],
            'CourseType_id' => ['required'],
            'FullQty'=> ['required','integer','min:10','max:500'],
            'State' => ['required']
        ];
    }
}
