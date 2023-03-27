<?php
namespace App\Services\UserServices;

use App\Http\Requests\CreateUserRequest;
use App\Models\Rules as ModelsRules;
use App\Models\User;
use Illuminate\Http\Request;
use Pest\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserCreateService
{

/*
Create new Admin From the Main Admin

///Request 

return @User
*/
public function createAdmin(CreateUserRequest $request)
{
    $Age = $request->Age;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'Age' => ['required', 'min:1','max:100'],
            'Gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => strtolower($request->name),
            'email' => $request->email,
            'Gender' => $request->Gender,
            'Age'  => 90,
            'ISAdmin' => $request->ISAdmin,
            'password' => Hash::make($request->password),
        ]);
        if($user){
            User::where('email','=',$request->email)->update([
                'remember_token'=> Str::random(60),
                'rules' => [
                    1 => 'CreateCourse' ,
                    2 => 'UpdateCourse' ,
                    3 => 'DeleteCourse' ,    
                    ],
            ]);
        }
        return $request->Age;
}


}


?>