<?php
namespace App\Services\CoursesServices;

use App\Http\Requests\CoursesCreteRequest;
use App\Models\Courses;

use function PHPUnit\Framework\isNull;

class CoursesActiveService 
{

/*
     *       $table->string('CourseName');
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

public function active($id)
{
    $course = Courses::find($id);
    $course->update([
                'State' => !$course->State,
                ]);
        return $course->State;
}

}


