<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create()
    {
        return view('dashboard.users.createUser');
    }

    public function store(UserRequest $request)
    {
        if(isset($request->perfil))
        {
            $request["perfil"] = 1;

        }else $request["perfil"] = 0;

        $request["password"] = Hash::make($request->password);

        User::create($request->all());

        return redirect()->back()->with('message','Usuário cadastrado com sucesso');

    }


}
