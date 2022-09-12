@extends('layouts.default')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container m-5">

        <Form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('includes._form-post')

            <button type="submit" class="btn btn-primary btn-block mb-4">Crear Post</button>
        </form>

        {{-- <label for="">Titulo :</label>
            <input type="text" name="titulo" value="{{ old('title') }}">            

            <label for="">Slug :</label>
            <input type="text" name="slug" value="{{ old('slug') }}">

            <label for="">Descripcion : </label>
            <input type="text" name="descripcion" value="{{ old('descripcion') }}">

            <label for="">Inserte una Imagen </label>
            <input type="file" name="imagen" id="imagen">

            <button type="submit">Crear Post</button> --}}

        </Form>

    </div>



@stop
