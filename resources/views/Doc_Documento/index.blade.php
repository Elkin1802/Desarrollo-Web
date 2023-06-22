@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1 style="text-align: center">Docuementos Creados</h1>
    <link rel="stylesheet" href="css/tables.css">
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="author table-responsive">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="provedor">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Doc Nombre</th>
                                                <th scope="col">Doc Codigo</th>
                                                <th scope="col">Doc Contenido</th>
                                                <th scope="col">Tipo Doc</th>
                                                <th scope="col">Proceso</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Doc_Documento as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->doc_nombre}}</td>
                                                    <td>{{$info->doc_codigo}}</td>
                                                    <td>{{$info->doc_contenido}}</td>
                                                    <td>{{$info->doc_id_tipo}}</td>
                                                    <td>{{$info->doc_id_proceso}}</td>

                                                    <td class="td-actions text-center">

                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                    <a href="{{route('edit.Doc_Documento', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>

                                                                    <form action="{{route('destroy.Doc_Documento', $info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-success" type="submit" rel="tooltip">
                                                                            <i class="material-icons">
                                                                                delete
                                                                            </i>
                                                                        </button>
                                                                    </form>

                                                                </div>
                                                            </a>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <script src="https://kit.fontawesome.com/cf5c5d84ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#provedor').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados - Disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar : ",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                }

            }
        });
    } );
    </script>


@stop 
