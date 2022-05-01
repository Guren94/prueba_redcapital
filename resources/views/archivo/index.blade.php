@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Historico</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Descargas</th>
                        </thead>
                        <tbody>
                            @foreach ($archivos as $archivo)
                                <tr>
                                    <td>1</td>
                                    <td>{{$archivo->fk_id_usuario}}</td>
                                    <td>{{$archivo->nombre_archivo}}</td>
                                    <td><a href="{{$archivo->ruta_archivo}}" class="btn btn-success" download>Descargar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <a href="{{route('home')}}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
