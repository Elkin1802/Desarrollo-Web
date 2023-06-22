@extends('layouts.app')

@extends('adminlte::page')

@section('title', 'Provedor')

@section('content_header')
    <h1 style="text-align: center">Ingresar Tipo Doc</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.Tip_Tipo_Doc')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                
                            <div class="row">

                                
                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="tip_nombre" value="{{old('tip_nombre')}}" required="required">
                                        <span>Tip Nombre</span>
                                        @if ($errors->has('tip_nombre'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('tip_nombre')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="tip_prefijo" value="{{old('tip_prefijo')}}" required="required">
                                        <span>Tip Prefijo</span>
                                        @if ($errors->has('tip_prefijo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('tip_prefijo')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Insertar</button>
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
@stop