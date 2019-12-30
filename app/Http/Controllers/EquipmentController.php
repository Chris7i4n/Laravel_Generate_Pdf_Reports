<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipment;
use App\Http\Requests\EquipmentRequest;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        return view('dashboard.equipment.showEquipments', compact('equipments'));
    }
    public function create()
    {
        return view('dashboard.equipment.addEquipment');
    }

    public function store(EquipmentRequest $request)
    {
        Equipment::Create($request->all());
        return redirect()->back()->with(['message'=>'Equipamento cadastrado com sucesso']);
    }

    public function edit(Equipment $equipment)
    {
        return view('dashboard.equipment.addEquipment', compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $equipment->update($request->all());
        $equipment->save();
        return redirect()->back()->with('message', 'Equipamento atualizado com sucesso');
    }
}
