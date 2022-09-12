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

    @if (Auth::check())
        <div class="row text-center search-box">
            <div class="col-md-">
                <div class="form-group">
                    <a name="" id="" class="btn btn-primary" href="{{ route('post.create') }}"
                        role="button">Crear Post</a>
                </div>
            </div>
        </div>
    @endif


    @include('includes.session-status')

    @if ($post)
        @foreach ($post as $item)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-sm-4 position-relative">
                        <img src="https://via.placeholder.com/350x200" width="350" class="card-img fit-cover w-100 h-100"
                            alt="{{ $item->name }}">
                    </div>

                    <div class="col-sm-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="link-dark text-decoration-none" href="{{ route('post.show', $item) }}"
                                    target="_blank">{{ $item->titulo }}
                                </a>
                                <small> | {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
                            </h5>


                            <p class="card-text">{{ Str::limit($item->descripcion, 120, $end = ' ...') }} </p>

                        </div>

                    </div>
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
