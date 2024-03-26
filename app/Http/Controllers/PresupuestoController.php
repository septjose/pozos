<?php

namespace App\Http\Controllers;

use App\Models\Presupuesto;
use App\Http\Requests\StorePresupuestoRequest;
use App\Http\Requests\UpdatePresupuestoRequest;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private Presupuesto $presupuesto) {}
    public function index()
    {
        try {
            $presupuestos = $this->presupuesto->all();
            return view('presu$presupuestos.index', compact('presu$presupuestos'));
        } catch (\Throwable $e) {
            return redirect()->route('presupuestos.index')
                ->withError('Error: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('presupuestos.crear');
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('presupuestos.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePresupuestoRequest $request)
    {
        $presupuesto = $this->presupuesto->create($request->validated());
        return redirect()->route('presupuestos.index', $presupuesto);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $presupuesto=$this->presupuesto->find($id);
            return view('presupuestos.mostrar',compact('presupuesto'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('presupuestos.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $presupuesto = $this->presupuesto->find($id);
            return view('presupuestos.editar', compact('presupuesto'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('presupuestos.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePresupuestoRequest $request, Presupuesto $presupuesto)
    {
        $presupuesto->update($request->validated());
        return redirect()->route('presupuestos.index', $presupuesto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presupuesto $presupuesto)
    {
        $presupuesto->delete();
        return redirect()->route('presupuestos.index');
    }
}
