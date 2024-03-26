<?php

namespace App\Http\Controllers;

use App\Models\Pozo;
use App\Http\Requests\StorePozoRequest;
use App\Http\Requests\UpdatePozoRequest;

class PozoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private Pozo $pozo) {}
    public function index()
    {
        try {
            $pozos = $this->pozo->all();
            return view('pozos.index', compact('pozos'));
        } catch (\Throwable $e) {
            return redirect()->route('pozos.index')
                ->withError('Error: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('pozos.crear');
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('pozos.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePozoRequest $request)
    {
        $pozo = $this->pozo->create($request->validated());
        return redirect()->route('pozos.index', $pozo);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $pozo=$this->pozo->find($id);
            return view('pozos.mostrar',compact('pozo'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('pozos.index')
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
            $pozo = $this->pozo->find($id);
            return view('pozos.editar', compact('pozo'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('pozos.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePozoRequest $request, Pozo $pozo)
    {
        $pozo->update($request->validated());
        return redirect()->route('pozos.index', $pozo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pozo $pozo)
    {
        $pozo->delete();
        return redirect()->route('pozos.index');
    }
}

