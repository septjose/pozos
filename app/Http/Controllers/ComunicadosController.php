<?php

namespace App\Http\Controllers;

use App\Models\Comunicados;
use App\Http\Requests\StoreComunicadosRequest;
use App\Http\Requests\UpdateComunicadosRequest;

class ComunicadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private Comunicados $comunicado) {}
    public function index(){
          try {
                    $comunicados = $this->comunicado->all();
                    return view('comunicados.index', compact('comunicados'));
                } catch (\Throwable $e) {
                    return redirect()->route('comunicados.index')
                        ->withError('Error: ' . $e->getMessage());
                }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('comunicados.crear');
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('comunicados.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComunicadosRequest $request)
    {
        $comunicado = $this->comunicado->create($request->validated());
        return redirect()->route('comunicados.index', $comunicado);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $comunicado=$this->comunicado->find($id);
            return view('comunicados.mostrar',compact('comunicado'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('comunicados.index')
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
            $comunicado = $this->comunicado->find($id);
            return view('comunicados.editar', compact('comunicado'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('comunicados.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComunicadosRequest $request, Comunicados $comunicado)
    {
        $comunicado->update($request->validated());
        return redirect()->route('comunicados.index', $comunicado);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comunicados $comunicado)
    {
        $comunicado->delete();
        return redirect()->route('comunicados.index');
    }
}
