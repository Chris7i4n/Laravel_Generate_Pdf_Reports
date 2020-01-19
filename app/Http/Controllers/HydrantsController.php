<?php

namespace App\Http\Controllers;

use App\Http\Requests\TriggersRequest;
use App\Hydrant;
use Illuminate\Http\Request;

class HydrantsController extends Controller
{
    public function index()
    {
        $hydrants = Hydrant::all();
        return view('dashboard.hydrants.showHydrants', compact('hydrants'));
    }
    public function create()
    {
        return view('dashboard.hydrants.addHydrant');
    }

    public function store(TriggersRequest $request)
    {
        Hydrant::Create($request->all());
        return redirect()->back()->with(['message'=>'Hidrante cadastrada com sucesso']);
    }

    public function edit(Hydrant $hydrant)
    {
        return view('dashboard.hydrants.addhydrant', compact('hydrant'));
    }

    public function update(Request $request, Hydrant $hydrant)
    {
        $hydrant->update($request->all());
        $hydrant->save();
        return redirect()->back()->with('message', 'Hidrante atualizado com sucesso');
    }
}
