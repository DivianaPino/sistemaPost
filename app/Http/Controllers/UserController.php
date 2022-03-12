<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    // public function show ()
    // {
    //     $user=User::all();
    //     return view('user.show')->with(['users'=>$user, 'roles'=>$roles]);
    // }

    public function index()
    {
        $user=User::all();
        return view ('user.index')->with('users', $user);
    }

    public function edit(User $user)
    {
        $roles= Role::all();
        return view('user.edit')->with(['user'=>$user, 'roles'=>$roles]);
    }

    
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('users.edit', $user)->with('info', 'Se asignó los roles correctamente');
    }

}
