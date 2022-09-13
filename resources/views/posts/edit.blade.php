@extends('layouts.default')
@section('content')

    <div class="m-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <Form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="PATCH">

            @csrf

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="titulo" value="{{ $post->titulo }}" id="form6Example1"
                            class="form-control" />
                        <label class="form-label" for="form6Example1">Titulo Post</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="slug" value="{{ $post->slug }}" id="form6Example2"
                            class="form-control" />
                        <label class="form-label" for="form6Example2">Slug / Url</label>
                    </div>
                </div>
            </div>


            <div class="form-outline mb-4">
                <input type="file" id="form6Example4" name="imagen" value="{{ $post->imagen }}" class="form-control" />
                <label class="form-label" for="form6Example4">Suba una imagen</label>
            </div>

            @if ($post->imagen)
                <div class="form-group">
                    <img src="{{ Storage::url($post->imagen) }}" height="200" width="200" alt="" />
                </div>
            @endif


            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" name="descripcion" rows="4">{{ $post->descripcion }}</textarea>
                <label class="form-label" for="form6Example7">Descripcion del Post</label>
            </div>
            

            <input name="" id="" class="btn btn-primary" type="submit" value="Editar Post">

        </Form>
    </div>
@stop
