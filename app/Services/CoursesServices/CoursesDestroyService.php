<?php

namespace App\Services\CoursesServices;

use App\Models\Courses;

class CoursesDestroyService 
{
     
 public function DestroyCourse(Courses $course)
{

    $course->delete();
    return 'Done';
}

}