<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Courses;
use App\Models\User;
use App\Services\UserServices\UserCreateService;
use App\Services\UserServices\UserUpdateService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('user.Users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chatify()
    {
        return view('vendor/Chatify/pages/app');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request,UserCreateService $service)
    {
        
        return $service->createAdmin($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $rules;
        $Users = User::whereNot('rules','like','%'.'UserControl'.'%')->orwhere('rules')->paginate(5);
        return $Users;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $Users = User::where('id',$id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, UserUpdateService $service,$id)
    {
        $service->UpdateAdmin($request,$id);
        return 'Done';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return 'Done';
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAllCourses($id)
    {
        $courses = Courses::where('Course_user_id',$id)->get();
        foreach ($courses as $course){
            $file_path = base_path('/storage/app/public/Courses-Images/'+ $course->CourseLogo);
            if (file_exists($file_path)) {
                unlink($file_path);
            } 
        }
        $courses = Courses::where('Course_user_id',$id)->delete('cascade');
        return 'Done All Related Courses Deleted';
    }
}
