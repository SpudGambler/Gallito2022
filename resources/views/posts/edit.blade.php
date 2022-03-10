@extends('layouts.app')

@section('content')

@if ($post->user_id == Auth::id())
    <div class="container">
        <h1>Editar Una Publicación</h1>

        @include('layouts.subview-form-errors')

        {!! Form::model($post, ['method' => 'put', 'route' => ['posts.update', $post->id]]) !!}

            @include('posts.subview-post-fields')
            <button type="submit" class="btn btn-primary">Modificar</button>

        {!! Form::close() !!}

    </div>
@else
    <div class="container">
        <h1>Acceso no autorizado</h1>
    </div>
@endif

@endsection
