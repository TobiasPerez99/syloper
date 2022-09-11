@extends('layouts.default')
@section('content')

    <div class="row text-center search-box">
        <div class="col-md-5 m-5">
            <h5>Buscar Post</h5>
            <div class="form-group">

                <form action="{{ route('front.search') }}" method="post">
                    @csrf
                    <label for=""></label>
                    <input type="text" name="search" id="" class="form-control" placeholder="Ingrese Busqueda"
                        aria-describedby="helpId">
                    <button type="submit" class="btn btn-primary mt-4">Buscar Post</button>
                </form>
            </div>
        </div>
    </div>

    @if ($post)
        @foreach ($post as $item)
            <div class="card border-3 shadow-sm mt-4 mx-auto">
                <div class="card-body m-3">
                    <h5 class="card-title">
                        <a class="post-title" href="{{ route('post.show', $item) }}">{{ $item->titulo }}</a>
                    </h5>
                    <h6>{{ $item->created_at }}</h6>
                    <p class="card-text">{{ $item->descripcion }}</p>
                    <a target="_blank" href="{{ route('post.show', $item->slug) }}" class="btn btn-primary">Ver Post</a>
                </div>
            </div>
        @endforeach
    @else
        <a href="#">No hay Proyectos para mostrar</a>
    @endif

    {{-- paginado --}}

    <div class="d-flex justify-content-center mt-5">
    {!! $post->links() !!}
    </div>
    
@stop
