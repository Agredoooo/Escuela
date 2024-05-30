<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
 


class RoleUserController extends Controller
{
    
    public function asociar(){

        $users = User::all();
        $roles = Role::all();
       
        return view('role_user.asociar',compact('users','roles'));

    }

    public function store(Request $request){

        $user=User::find($request->user_id);
        $user->roles()->attach($request->role_id);
        
        return "El rol se asocio correctamente";

    }
}
