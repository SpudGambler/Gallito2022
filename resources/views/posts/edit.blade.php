@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Una Publicación</h1>

    @include('layouts.subview-form-errors')

    {!! Form::model($post, ['method' => 'put', 'route' => ['posts.update', $post->id]]) !!}

        @include('posts.subview-post-fields')
        <button type="submit" class="btn btn-primary">Modificar</button>

    {!! Form::close() !!}

</div>
@endsection
