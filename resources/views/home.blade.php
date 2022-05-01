@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ingresaste correctamente <br>
                    <a href="{{ url('/archivo') }}">Historico</a>
                    <hr>
                    <a href="{{ route('archivo.create') }}" class="btn btn-info">Añadir archivo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
