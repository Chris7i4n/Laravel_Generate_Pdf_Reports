<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecomendationsRequest;
use App\Http\Requests\TriggersRequest;
use App\Recomendation;
use Illuminate\Http\Request;

class RecomendationsController extends Controller
{
    public function index()
    {
        $recomendations = Recomendation::all();
        return view('dashboard.recomendations.showRecomendations', compact('recomendations'));
    }
    public function create()
    {
        return view('dashboard.recomendations.addRecomendation');
    }

    public function store(RecomendationsRequest $request)
    {
        Recomendation::Create($request->all());
        return redirect()->back()->with(['message'=>'Recomendação cadastrada com sucesso']);
    }

    public function edit(Recomendation $recomendation)
    {
        return view('dashboard.recomendations.addRecomendation', compact('recomendation'));
    }

    public function update(Request $request, Recomendation $recomendation)
    {
        $recomendation->update($request->all());
        $recomendation->save();
        return redirect()->back()->with('message', 'Recomendação atualizado com sucesso');
    }
}
