<div class="card mb-2">
    <div class="card-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-10">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at->diffForHumans()}}</h6>
                    <p class="card-text">{{$post->content}}</p>
                </div>
                @if ($user->id == Auth::user()->id)
                    <div class="col-1">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info" style="padding: 0.5rem 0.8rem;">
                            <i class="fa-solid fa-pencil fa-2x" title="Editar post" style="margin-top: 20%"></i>
                        </a>
                    </div>
                    <div class="center col-1">

                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}

                        {!! Form::button ('<i class="fa-solid fa-trash-can fa-2x"  title="Remover post" style="margin-top: 20%"></i>', [
                            'type' => 'submit',
                            'title' => "Remover Post",
                            'class' => 'btn btn-danger ',
                            'onClick' => "return confirm('¿Está seguro de remover esta publicación')",
                            'style' => "padding: 0.5rem 0.8rem;"
                        ]) !!}

                        {!! Form::close() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
