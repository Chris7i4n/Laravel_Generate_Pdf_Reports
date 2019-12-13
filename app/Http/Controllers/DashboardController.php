<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DashboardController extends Controller
{
    public function index()
    {
        $numberOfClients = User::where('perfil',0)->count();
        return view('dashboard.initialScreen')->with(compact('numberOfClients'));
    }

}
