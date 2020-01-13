<?php

namespace App\Http\Controllers;

use App\Http\Requests\TriggersRequest;
use App\Sinalization;
use Illuminate\Http\Request;

class SinalizationsController extends Controller
{
    public function index()
    {
        $sinalizations = Sinalization::all();
        return view('dashboard.sinalizations.showSinalizations', compact('sinalizations'));
    }
    public function create()
    {
        return view('dashboard.sinalizations.addSinalization');
    }

    public function store(TriggersRequest $request)
    {
        Sinalization::Create($request->all());
        return redirect()->back()->with(['message'=>'Sinalizador cadastrado com sucesso']);
    }

    public function edit(Sinalization $sinalization)
    {
        return view('dashboard.sinalizations.addSinalization', compact('sinalization'));
    }

    public function update(Request $request, Sinalization $sinalization)
    {
        $sinalization->update($request->all());
        $sinalization->save();
        return redirect()->back()->with('message', 'Sinalizador atualizado com sucesso');
    }
}
