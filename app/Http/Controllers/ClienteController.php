<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private Cliente $cliente) {}
    public function index()
    {
        try {
            $clientes = $this->cliente->all();
            return view('clientes.index', compact('clientes'));
        } catch (\Throwable $e) {
            return redirect()->route('clientes.index')
                ->withError('Error: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('clientes.crear');
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('clientes.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = $this->cliente->create($request->validated());
        return redirect()->route('clientes.index', $cliente);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $cliente=$this->cliente->find($id);
            return view('clientes.mostrar',compact('cliente'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('clientes.index')
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
            $cliente = $this->cliente->find($id);
            return view('clientes.editar', compact('cliente'));
        }catch (\Exception $e){
            $mensaje= 'Error '.$e->getMessage();
            return redirect()->route('clientes.index')
                    ->with('type_message', "success")
                    ->with('message', $mensaje);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return redirect()->route('clientes.index', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}

