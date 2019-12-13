<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create()
    {
        return view('dashboard.users.createUser');
    }

    public function store(Request $request)
    {
        if(isset($request->perfil))
        {
            $request["perfil"] = 1;
        }else $request["perfil"] = 0;

        User::create($request->all());

        return redirect()->back();
    }


}
