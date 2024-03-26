<?php

namespace App\Http\Controllers;

use App\Models\Diametros_bomba;
use App\Http\Requests\StoreDiametros_bombaRequest;
use App\Http\Requests\UpdateDiametros_bombaRequest;

class Diametros_bombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private Diametros_bomba $diametro_bomba) {}
    public function index(){
          try {
                    $diametros_bomba = $this->diametro_bomba->all();
                    return view('diametros_bomba.index', compact('diametros_bomba'));
                } catch (\Throwable $e) {
                    return redirect()->route('diametros_bomba.index')
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
    public function store(StoreDiametros_bombaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $diametro_bomba = $this->diametro_bomba->find($id);
            return view('diametros_bomba.index', compact('diametro_bomba'));
        } catch (\Throwable $e) {
            return redirect()->route('diametros_bomba.index')
                ->withError('Error: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diametros_bomba $diametros_bomba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiametros_bombaRequest $request, Diametros_bomba $diametros_bomba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diametros_bomba $diametros_bomba)
    {
        //
    }
}
