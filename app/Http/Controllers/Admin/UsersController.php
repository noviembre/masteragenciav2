<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users'   =>  $users]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        #-------------------------------------------------
        #fuente:
        #https://laravel.com/docs/5.5/validation#rule-file
        #ejemplo:
        #The file under validation must be an image
        #lo utiza para la imagen
        #--------------------------------------------------
        $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required|email|unique:users',
            'password'  =>  'required',
            'avatar'    =>  'nullable|image'
        ]);
        $user = User::add($request->all());
        $user->uploadAvatar($request->file('avatar'));
        return redirect()->route('users.index');
    }
}
