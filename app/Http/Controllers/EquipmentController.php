<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipment;


class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipments = Equipment::all();
        return view('index', compact('equipments'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'equipment_type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'serial_number' => 'required',
            'acquisition_date' => 'required',
            'maintenance_frequency' => 'required',
        ]);

        Equipment::create($request->all());

        return redirect()->route('equipments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('show', compact('equipment'));
    }

    public function edit(Equipment $equipment)
    {
        return view('edit', compact('equipment'));
    }
        //
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'equipment_type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'serial_number' => 'required',
            'acquisition_date' => 'required',
            'maintenance_frequency' => 'required',
        ]);

        $equipment->update($request->all());

        return redirect()->route('equipments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();

        return redirect()->route('equipments.index');
    }
}
