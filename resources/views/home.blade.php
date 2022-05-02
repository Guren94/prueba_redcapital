@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="text-align: center">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('denied'))
        <div class="alert alert-danger" style="text-align: center">
            <p><b>{{ $message }}</b></p>
        </div>
    @endif
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        Bienvenid@ {{ Auth::user()->name }}. <br>
    </div>
@endsection
