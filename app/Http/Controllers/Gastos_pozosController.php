<?php

namespace App\Http\Controllers;

use App\Models\Gastos_pozos;
use App\Http\Requests\StoreGastos_pozosRequest;
use App\Http\Requests\UpdateGastos_pozosRequest;

class Gastos_pozosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private Gastos_pozos $gasto_pozo) {}
    public function index(){
          try {
                    $gastos_pozos = $this->gasto_pozo->all();
                    return view('gastos_pozos.index', compact('gastos_pozos'));
                } catch (\Throwable $e) {
                    return redirect()->route('gastos_pozos.index')
                        ->withError('Error: ' . $e->getMessage());
                }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGastos_pozosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $gasto_pozo = $this->gasto_pozo->find($id);
            return view('diametros_bomba.index', compact('gasto_pozo'));
        } catch (\Throwable $e) {
            return redirect()->route('diametros_bomba.index')
                ->withError('Error: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gastos_pozos $gastos_pozos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGastos_pozosRequest $request, Gastos_pozos $gastos_pozos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gastos_pozos $gastos_pozos)
    {
        //
    }
}
