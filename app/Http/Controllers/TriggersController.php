<?php

namespace App\Http\Controllers;

use App\Http\Requests\TriggersRequest;
use App\Trigger;
use Illuminate\Http\Request;

class TriggersController extends Controller
{
    public function index()
    {
        $triggers = Trigger::all();
        return view('dashboard.triggers.showTriggers', compact('triggers'));
    }
    public function create()
    {
        return view('dashboard.triggers.addTrigger');
    }

    public function store(TriggersRequest $request)
    {
        Trigger::Create($request->all());
        return redirect()->back()->with(['message'=>'Acionador cadastrado com sucesso']);
    }

    public function edit(Trigger $trigger)
    {
        return view('dashboard.triggers.addTrigger', compact('trigger'));
    }

    public function update(Request $request, Trigger $trigger)
    {
        $trigger->update($request->all());
        $trigger->save();
        return redirect()->back()->with('message', 'Acionador atualizado com sucesso');
    }
}
