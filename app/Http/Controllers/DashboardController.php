<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Report;
use Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $numberOfClients = User::where('perfil',0)->count();

        if(Auth::user()->perfil){
            $approvedReports = Report::where('approved',1)->count();
            $notApprovedReports = Report::where('approved',0)->count();
        }else{
            $approvedReports = Report::where('approved',1)->where('user_id',Auth::user()->id)->count();
            $notApprovedReports = Report::where('approved',0)->where('user_id',Auth::user()->id)->count();
        }

        return view('dashboard.initialScreen')->with(compact('numberOfClients', 'approvedReports', 'notApprovedReports'));
    }

}
