<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('welcome');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2(Request $request)
    {
        if ($request->name != null) {     
            return View('MainCoursesGuest',['name'=>$request->name])->with('user')->with('Courses',Courses::Where('CourseName','like', '%'. strtolower($request->name) .'%')->where('State',1)->where('CourseType_id',1)->OrderBy('Created_at', 'desc')->paginate(6));
        }
        return View('MainCoursesGuest',['name'=>$request->name])->with('user')->with('Courses',Courses::Where('State',1)->where('CourseType_id',1)->OrderBy('Created_at', 'desc')->paginate(9));
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index3(Request $request)
    {
        if ($request->name != null) {     
            return View('MasterCoursesGuest',['name'=>$request->name])->with('user')->with('Courses',Courses::Where('CourseName','like', '%'. strtolower($request->name) .'%')->where('CourseType_id',1)->where('State',2)->OrderBy('Created_at', 'desc')->paginate(6));
        }
        return View('MasterCoursesGuest',['name'=>$request->name])->with('user')->with('Courses',Courses::Where('State',1)->where('CourseType_id',2)->OrderBy('Created_at', 'desc')->paginate(9));
    }
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index4()
    {
        return view('Info&Policy');
    }
    

}
