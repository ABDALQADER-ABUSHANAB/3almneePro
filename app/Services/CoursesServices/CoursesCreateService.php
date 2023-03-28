<?php
namespace App\Services\CoursesServices;

use App\Http\Requests\CoursesCreteRequest;
use App\Models\Courses;
use Illuminate\Http\File;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isNull;

class CoursesCreateService
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

public function StoreCourse(CoursesCreteRequest $request)
{


$file = auth()->id().time().'.'.$request->CourseLogo->extension();
$request->CourseLogo->move(base_path('/public/build/assets/Courses-Images'), $file);
$State=0;$ISFree = 0;$CoursePrice=0;
if($request->CoursePrice != null){$CoursePrice = $request->CoursePrice;}
if ($request->StateV != null ){$State = 1;}
if ($request->IsFreeV != null ){$ISFree = 1;}
if ($ISFree ==1) {
    $CoursePrice = 0;
}
    $course = Courses::create([
            'CourseName' => strtolower($request->CourseName),
            'CourseLogo' => $file,
            'CourseLink' => $request->CourseLink,
            'CourseDesc' => strtolower($request->CourseDesc),
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


?>
