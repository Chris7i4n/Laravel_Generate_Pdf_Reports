<?php

namespace App\Http\Controllers;

use App\Bomb;
use App\Http\Requests\TriggersRequest;
use Illuminate\Http\Request;

class BombsController extends Controller
{
    public function index()
    {
        $bombs = Bomb::all();
        return view('dashboard.bombs.showBombs', compact('bombs'));
    }
    public function create()
    {
        return view('dashboard.bombs.addBomb');
    }

    public function store(TriggersRequest $request)
    {
        Bomb::Create($request->all());
        return redirect()->back()->with(['message'=>'Bomba cadastrada com sucesso']);
    }

    public function edit(Bomb $bomb)
    {
        return view('dashboard.bombs.addBomb', compact('bomb'));
    }

    public function update(Request $request, Bomb $bomb)
    {
        $bomb->update($request->all());
        $bomb->save();
        return redirect()->back()->with('message', 'Bomba atualizado com sucesso');
    }
}
