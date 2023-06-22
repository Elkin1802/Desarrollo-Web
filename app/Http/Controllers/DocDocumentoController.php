<?php

namespace App\Http\Controllers;

use App\Models\Doc_Documento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pro_Proceso;
use App\Models\tip_Tipo_Doc;

class DocDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Doc_Documento = Doc_Documento::all();
        return view('Doc_Documento.index', compact('Doc_Documento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $pro_Proceso = Pro_Proceso::all();
        $tip_Tipo_Doc = Tip_Tipo_Doc::all();

        return view('Doc_Documento.create',compact('pro_Proceso', 'tip_Tipo_Doc'))->with('crear', 'ok');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'doc_nombre' => 'required',
            'doc_codigo' => 'required',
            'doc_contenido' => 'required',
            'doc_id_tipo' => 'required',
            'doc_id_proceso' => 'required'

        ]);
        
            $request->all();
            DB::table('Doc__Documentos')->insert([

            'doc_nombre' => $request -> doc_nombre,
            'doc_codigo' => $request -> doc_codigo,
            'doc_contenido' => $request -> doc_contenido,
            'doc_id_tipo' => $request -> doc_id_tipo,
            'doc_id_proceso' => $request -> doc_id_proceso

            ]);

            return redirect()->route('index.Doc_Documento');

    }

    /**
     * Display the specified resource.
     */
    public function show(Doc_Documento $doc_Documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doc_Documento $doc_Documento)
    {
        $pro_Proceso = Pro_Proceso::all();
        $tip_Tipo_Doc = Tip_Tipo_Doc::all();
        return view('Doc_Documento.edit', compact('doc_Documento','pro_Proceso','tip_Tipo_Doc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doc_Documento $doc_Documento)
    {
        $request->validate([

            'doc_nombre' => 'required',
            'doc_codigo' => 'required',
            'doc_contenido' => 'required',
            'doc_id_tipo' => 'required',
            'doc_id_proceso' => 'required'

        ]);
        
            $doc_Documento->update([

            'doc_nombre' => $request -> doc_nombre,
            'doc_codigo' => $request -> doc_codigo,
            'doc_contenido' => $request -> doc_contenido,
            'doc_id_tipo' => $request -> doc_id_tipo,
            'doc_id_proceso' => $request -> doc_id_proceso

            ]);

            return redirect()->route('index.Doc_Documento')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doc_Documento $doc_Documento)
    {
        $doc_Documento->delete();
        return redirect()->back()->with('eliminar', 'ok');
    }
}
