@extends('layouts.app')

@section('content')

<h1>Crear Una Nuva Publicación</h1>

{!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}
    
    <form>
        <div class="mb-3">
        <label for="Content" class="form-label">Contenido</label>
        <textarea id="content" class="form-controll" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

{!! Form::close() !!}

@endsection