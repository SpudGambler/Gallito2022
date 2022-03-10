@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear Una Nueva Publicación</h1>

    @include('layouts.subview-form-errors')

    {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}

        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            {!! Form::textarea('content', '', ['class' => "form-control", 'rows' => 3]); !!}
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>

    {!! Form::close() !!}

</div>
@endsection
