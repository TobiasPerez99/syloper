@extends('layouts.default')
@section('content')

    @if (Auth::check())
        <form action="{{ route('post.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary m-3">
                Eliminar
            </button>

            <a class="btn btn-primary m-3" href="{{ route('post.edit', $post) }}" role="button">Editar Proyecto</a>
        </form>
    @endif


    <div class="row mt-5">

        <div class="col-md-12 border d-flex flex-wrap justify-content-center flex-column align-items-center">

            <div class="post-title">
                <h1>{{ $post->titulo }}</h1>
            </div>

            @if ($post->imagen)
                <img src="{{ Storage::url($post->imagen) }}" class="img-fluid ${3|rounded-top,rounded-rigrounded-bottom,rounded-left,rounded-circle,|}" alt="">
            @endif

            <div class="post-description m-4">
                <h3>{{ $post->descripcion }}</h3>
            </div>

            <div class="created-date">
                <h4>{{ $post->created_at }}</h4>
            </div>
        </div>

    </div>
@stop
