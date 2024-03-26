<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Http\Requests\StoreReporteRequest;
use App\Http\Requests\UpdateReporteRequest;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function __construct(private Reporte $reporte) {}
    public function index()
    {
        try {
            $reportes = $this->reporte->all();
            return view('reportes.index', compact('reportes'));
        } catch (\Throwable $e) {
            return redirect()->route('reportes.index')
                ->withError('Error: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('reportes.crear');
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('reportes.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReporteRequest $request)
    {
        $reporte = $this->reporte->create($request->validated());
        return redirect()->route('reportes.index', $reporte);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $reporte=$this->reporte->find($id);
            return view('reportes.mostrar',compact('reporte'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('reportes.index')
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
            $reporte = $this->reporte->find($id);
            return view('reportes.editar', compact('reporte'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('reportes.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReporteRequest $request, Reporte $reporte)
    {
        $reporte->update($request->validated());
        return redirect()->route('reportes.index', $reporte);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        return redirect()->route('reportes.index');
    }
}
