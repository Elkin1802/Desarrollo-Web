@extends('adminlte::page')

@section('title', 'Areas')

@section('content_header')
    <h1 style="text-align: center">Agregar Documentos</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.Doc_Documento')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="mb-4 box">
                                        <input type="text" name="doc_nombre" value="{{old('doc_nombre')}}" required="required">
                                        <span>Doc Nombre</span>
                                        @if ($errors->has('doc_nombre'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('doc_nombre')}}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-lg-6">

                                    <div class="mb-4 box">
                                        <input type="number" name="doc_codigo" value="{{old('doc_codigo')}}" required="required">
                                        <span>Doc Codigo</span>
                                        @if ($errors->has('doc_codigo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('doc_codigo')}}</span>
                                        @endif
                                    </div>
                                    </div>


                                    <div class="col-lg-6 col-12">

                                        <div class="mb-4 box">
                                            <label>Tipo</label>
                                            <select name="doc_id_tipo" class="form-control">
        
                                                <option value=""> -- Selecciones un Tipo Doc -- </option>
        
                                                @foreach ($tip_Tipo_Doc as $tip)
                                                    
                                                    <option value="{{ $tip['id']}}">{{$tip['tip_nombre']}}</option>
        
                                                @endforeach
        
                                            </select>
        
                                        </div>
        
                                    </div>

                            <div class="col-lg-6 col-12">

                                <div class="mb-4 box">
                                    <label>Codigo</label>
                                    <select name="doc_id_proceso" id="" class="form-control">

                                        <option value=""> -- Selecciones un proceso -- </option>

                                        @foreach ($pro_Proceso as $proceso)
                                            
                                            <option value="{{ $proceso['id']}}">{{$proceso['pro_nombre']}}</option>

                                        @endforeach

                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-12">

                                <div class="mb-4 box">
                                    <label>Doc Contenido</label>
                                    <textarea name="doc_contenido" id="" value="{{old('doc_contenido')}}" cols="136" rows="5" required="required"></textarea>
                                    @if ($errors->has('doc_contenido'))
                                        <span class="error text-danger" for="input-name">{{$errors->first('doc_contenido')}}</span>
                                    @endif
                                </div>

                            </div>

                                <div class="col-lg-12">

                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Crear Documento</button>
                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
@stop
