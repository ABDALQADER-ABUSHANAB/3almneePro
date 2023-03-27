<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursesCreteRequest;
use App\Models\Courses;
use App\Services\CoursesServices\CoursesCreateService;
use App\Http\Requests\CoursesUpdateRequest;
use App\Services\CoursesServices\CoursesDestroyService;
use App\Services\CoursesServices\CoursesUpdateService;
use App\Services\CoursesServices\CoursesActiveService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Courses.Courses');
    }
    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\View
     */
    public function create()
    {
        return view('Courses/CrerateCourse');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursesCreteRequest $request, CoursesCreateService $service)
    {
       $service->StoreCourse($request);
        return 'Done';
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Courses = Courses::paginate(15);
        return  $Courses;
    }

    /**
     * Display the specified resource by name.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByname(String $CourseName)
    {
        $Courses = Courses::where('CourseName','like', '%' . $CourseName .'%')->get();
        return  $Courses;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Courses::find($id);
        return view('Courses.EditCourse',[
            'Course' => $course,
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoursesUpdateRequest $request, $id,CoursesUpdateService $service)
    {
        
        $service->UpdateCourse($request,$id);
        return back()->with('success', 'Your Request was successful!');;
    }

    
    /**
     * active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active(CoursesActiveService $service,$id)
    {
        

        return $service->active($id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $course = Courses::where('id',$id)->get();
        $file_path = base_path('/storage/app/public/Courses-Images/'. $course[0]->CourseLogo);
        Courses::where('id',$id)->delete();
        if (file_exists($file_path)) {
            unlink($file_path);
        } 
         return  'Done';
    }
}
