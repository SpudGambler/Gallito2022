@extends('layouts.app')

@section('content')

<div class="container">


    @auth
        <h1>Usuario {{Auth::user()->name}}</h1>
        {!! Form::open(['route' => ['users.destroy', Auth::user()], 'method' => 'delete']) !!}

        {!! Form::button ('<i class="fa-solid fa-trash-can fa-2x"  title="Remover Usuario" style="margin-top: 20%"></i>', [
            'type' => 'submit',
            'title' => "Remover Usuario",
            'class' => 'btn btn-danger ',
            'onClick' => "return confirm('¿Está seguro de eliminar este usuario')",
            'style' => "padding: 0.5rem 0.8rem;"
        ]) !!}

        {!! Form::close() !!}
        </div>
    @endauth
</div>
@endsection
