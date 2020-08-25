<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){

        $user = User::where('id', 1)->first();

        return view('listUser', ['user' => $user]);

        /*$user = new User();
        $user->name = 'Gustavo Web';
        $user->email = 'cursos@upinside.com.br';
        $user->password = Hash::make('123');
        $user->save();*/
        //echo "<h1>Listagem de Usuario</h1>";
    }
}
