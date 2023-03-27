<?php

namespace App\Services\CoursesServices;

use App\Http\Requests\CoursesUpdateRequest;

use App\Models\Courses;
use Illuminate\Support\Facades\Date;

class CoursesUpdateService
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

public function UpdateCourse(CoursesUpdateRequest $request ,$id)
{   
        $file = Courses::find($id)->get();
        //dd($file[0]->CourseLogo);
        if ($request->CourseLogo) {
               $file_path = base_path('/storage/app/public/Courses-Images/'. $file[0]->CourseLogo);
               if (file_exists($file_path)) {
                    unlink($file_path);
               } 
                $file = auth()->id().time().'.'.$request->CourseLogo->extension();
                $request->CourseLogo->move(base_path('storage/app/public/Courses-Images'), $file);
        }

        $State=0;$ISFree = 0;$CoursePrice=0;
        if($request->CoursePrice != null){$CoursePrice = $request->CoursePrice;}
        if ($request->State != null ){$State = 1;}
        if ($request->IsFree != null ){$ISFree = 1;}            
        
       $course = Courses::where('id', $id)->update([
                'CourseName' => strtolower($request->CourseName),
                'CourseLink' => $request->CourseLink,
                'CourseLogo' => $file,
                'CourseDesc' => $request->CourseDesc,
                'CoursePrice' =>$CoursePrice,
                'IsFree' => $ISFree,
                'Course_user_id' => auth()->id(),
                'CourseType_id' => $request->CourseType_id,
                'FullQty'=> $request->FullQty,
                'State' => $State
        ]);


    return $course;
}



}