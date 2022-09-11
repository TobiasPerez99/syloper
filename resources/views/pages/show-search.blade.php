@extends('layouts.default')
@section('content')
    <div class="m-1 mt-5">
        @if (isset($post))
            @if ($post->isEmpty())
                <h2>No encontramos resultados para el termino <b>"{{ $searchterm }}"</b>.</h2>
            @else
                <h2>Hay {{ $post->count() }} resultados para el término <b>"{{ $searchterm }}"</b></h2>

                <i class="m-2 bi bi-arrow-left-circle"></i><a style="text-decoration: none" href="{{ route('home') }}" alt="{{ __('') }}">{{ __('Volver a Todos Los Post') }}</a>

                <hr />
                @foreach ($post->groupByType() as $modelSearchResults)
                    @foreach ($modelSearchResults as $searchResult)
                        <div class="card border-3 shadow-sm mt-4 mx-auto">
                            <div class="card-body m-3">
                                <h5 class="card-title"> 
                                    <a class="post-title" href="{{ route('post.show', $searchResult->searchable) }}">{{ $searchResult->title }}</a>
                                </h5>
                                <h6>{{ $searchResult->searchable->created_at }}</h6>
                                <p class="card-text">{{ $searchResult->searchable->descripcion }}</p>
                                <a target="_blank" href="{{ route('post.show', $searchResult->searchable->slug) }}" class="btn btn-primary">Ver
                                    Post</a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            @endif
        @endif
    </div>
@stop
