<?php

namespace App\Http\Controllers;

use App\Models\Pro_Proceso;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pro_Proceso = Pro_Proceso::all();
        return view('Pro_Proceso.index', compact('Pro_Proceso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pro_Proceso.create')->with('crear', 'ok');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'pro_prefijo' => 'required',
            'pro_nombre' => 'required'

        ]);

        $request->all();
        DB::table('Pro__Procesos')->insert([

            'pro_prefijo' => $request->pro_prefijo,
            'pro_nombre' => $request->pro_nombre

        ]);

        return redirect()->route('index.Pro_Proceso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pro_Proceso $pro_Proceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pro_Proceso $pro_Proceso)
    {
        return view('Pro_Proceso.edit', compact('pro_Proceso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pro_Proceso $pro_Proceso)
    {
        $request->validate([

            'pro_prefijo' => 'required',
            'pro_nombre' => 'required'

        ]);


        $pro_Proceso->update([

            'pro_prefijo' => $request->pro_prefijo,
            'pro_nombre' => $request->pro_nombre

        ]);

        return redirect()->route('index.Pro_Proceso')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pro_Proceso $pro_Proceso)
    {
        $pro_Proceso->delete();
        return redirect()->back()->with('eliminar', 'ok');
    }
}
