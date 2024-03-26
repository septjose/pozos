<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Http\Requests\StoreBitacoraRequest;
use App\Http\Requests\UpdateBitacoraRequest;
use Illuminate\Support\Facades\Validator;


class BitacoraController extends Controller
{
    public function __construct(private Bitacora $bitacora) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
        //     $bitacoras = Bitacora::all();
        //     return view('bitacoras.index', compact('bitacoras'));
        // } catch (\Exception $e) {
        //     $mensaje = 'Error ' . $e->getMessage();
        //     return redirect()->route('bitacoras.index')
        //         ->with('type_message', 'error')
        //         ->with('message', $mensaje);
        // }

        try {
            $bitacoras = $this->bitacora->all();
            return view('bitacoras.index', compact('bitacoras'));
        } catch (\Throwable $e) {
            return redirect()->route('bitacoras.index')
                ->withError('Error: ' . $e->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('bitacoras.crear');
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
           return redirect()->route('bitacoras.index')
                    ->with('type_message', "error")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBitacoraRequest $request)
    {
        $bitacora = $this->bitacora->create($request->validated());
        return redirect()->route('bitacoras.index', $bitacora);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $bitacora=$this->bitacora->find($id);
            return view('bitacoras.mostrar',compact('bitacora'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
           return redirect()->route('bitacoras.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        try {
            $bitacora =$this->bitacora->find($id);
            return view('bitacoras.editar', compact('bitacora'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
           return redirect()->route('bitacoras.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBitacoraRequest $request, Bitacora $bitacora)
    {
        $bitacora->update($request->validated());
        return redirect()->route('bitacoras.show', $bitacora);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bitacora $bitacora)
    {
        $bitacora->delete();
        return redirect()->route('bitacoras.index');
    }
}
