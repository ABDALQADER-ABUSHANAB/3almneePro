<?php
namespace App\Services\UserServices;

use App\Http\Requests\UserUpdateRequest;
use App\Models\Rules as ModelsRules;
use App\Models\User;
use Illuminate\Http\Request;
use Pest\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserUpdateService
{

/*
Create new Admin From the Main Admin

///Request 

return @User
*/
public function UpdateAdmin(UserUpdateRequest $request,$id)
{
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'Age' => ['required', 'min:1','max:100'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $user = User::where('id',$id)->update([
            'name' => strtolower($request->name),
            'Gender' =>$request->Gender,
            'Age'  => $request->EAge,
        ]);
        
        if($user){
            User::where('email','=',$request->email)->update([
                'remember_token'=> Str::random(60),
            ]);
        }
        
}


}


?>