<?php

namespace App\Http\Controllers;

use App\Models\Detalle_presupuesto;
use App\Http\Requests\StoreDetalle_presupuestoRequest;
use App\Http\Requests\UpdateDetalle_presupuestoRequest;

class Detalle_presupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(private Detalle_presupuesto $detalle_presupuesto) {}
    public function index()
    {
        try {
            $detalle_presupuestos = $this->detalle_presupuesto->all();
            return view('detalle_presupuestos.index', compact('detalle_presupuestos'));
        } catch (\Throwable $e) {
            return redirect()->route('detalle_presupuestos.index')
                ->withError('Error: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('detalle_presupuesto.crear');
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('detalle_presupuestos.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDetalle_presupuestoRequest $request)
    {
        $detalle_presupuesto = $this->detalle_presupuesto->create($request->validated());
        return redirect()->route('detalle_presupuestos.index', $detalle_presupuesto);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $detalle_presupuesto=$this->detalle_presupuesto->find($id);
            return view('detalle_presupuestos.mostrar',compact('detalle_presupuesto'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('detalle_presupuestos.index')
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
            $detalle_presupuesto = $this->detalle_presupuesto->find($id);
            return view('detalles_presupuestos.editar', compact('detalle_presupuesto'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('detalles_presupuestos.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetalle_presupuestoRequest $request, Detalle_presupuesto $detalle_presupuesto)
    {
        $detalle_presupuesto->update($request->validated());
        return redirect()->route('detalles_presupuestos.index', $detalle_presupuesto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalle_presupuesto $detalle_presupuesto)
    {
        $detalle_presupuesto->delete();
        return redirect()->route('detalles_presupuestos.index');
    }
}
