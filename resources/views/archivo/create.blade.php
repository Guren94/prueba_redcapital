@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1>Cargar Archivo</h1><hr>
    <form action="{{route('archivo.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @if ($usuarios!=null)
            <div class="col-lg-12">
                <div class="form-group">
                    <label>
                        Seleccione usuario:
                    </label>
                    <select name="id_usuario" class="form-control">
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif

            <div class="col-lg-12">
                <div class="form-group">
                    <label>
                        Archivo:
                    </label>
                    <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" required autofocus>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Subir Archivo</button>
            </div>
        </div>
    </form>
    <hr>
    <a href="{{route('home')}}" class="btn btn-secondary">Volver</a>
</div>
@endsection
