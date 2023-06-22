<?php

namespace App\Http\Controllers;

use App\Models\Tip_Tipo_Doc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipTipoDocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tip_Tipo_Doc = Tip_Tipo_Doc::all();
        return view('Tip_Tipo_Doc.index',compact('Tip_Tipo_Doc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tip_Tipo_Doc.create')->with('crear', 'ok');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'tip_nombre' => 'required',
            'tip_prefijo' => 'required'

        ]);

        $request->all();
        DB::table('Tip__Tipo__Docs')->insert([

            'tip_nombre' => $request -> tip_nombre,
            'tip_prefijo' => $request -> tip_prefijo

        ]);

        return redirect()->route('index.Tip_Tipo_Doc');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tip_Tipo_Doc $tip_Tipo_Doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tip_Tipo_Doc $tip_Tipo_Doc)
    {
        return view('Tip_Tipo_Doc.edit', compact('tip_Tipo_Doc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tip_Tipo_Doc $tip_Tipo_Doc)
    {
        $request->validate([

            'tip_nombre' => 'required',
            'tip_prefijo' => 'required'

        ]);

        $tip_Tipo_Doc->update([

            'tip_nombre' => $request -> tip_nombre,
            'tip_prefijo' => $request -> tip_prefijo

        ]);

        return redirect()->route('index.Tip_Tipo_Doc')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tip_Tipo_Doc $tip_Tipo_Doc)
    {
        $tip_Tipo_Doc->delete();
        return redirect()->back()->with('eliminar', 'ok');
    }
}
