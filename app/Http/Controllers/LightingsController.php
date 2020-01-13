<?php

namespace App\Http\Controllers;

use App\Http\Requests\TriggersRequest;
use App\Lighting;
use Illuminate\Http\Request;

class LightingsController extends Controller
{
    public function index()
    {
        $lightings = Lighting::all();
        return view('dashboard.lightings.showlightings', compact('lightings'));
    }
    public function create()
    {
        return view('dashboard.lightings.addLighting');
    }

    public function store(TriggersRequest $request)
    {
        Lighting::Create($request->all());
        return redirect()->back()->with(['message'=>'Iluminação cadastrada com sucesso']);
    }

    public function edit(Lighting $lighting)
    {
        return view('dashboard.lightings.addLighting', compact('lighting'));
    }

    public function update(Request $request, Lighting $lighting)
    {
        $lighting->update($request->all());
        $lighting->save();
        return redirect()->back()->with('message', 'Iluminação atualizado com sucesso');
    }
}
