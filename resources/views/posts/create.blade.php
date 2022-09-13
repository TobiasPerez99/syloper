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

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="titulo" id="form6Example1"
                            class="form-control" />
                        <label class="form-label" for="form6Example1">Titulo Post</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="slug" id="form6Example2"
                            class="form-control" />
                        <label class="form-label" for="form6Example2">Slug / Url</label>
                    </div>
                </div>
            </div>


            <div class="form-outline mb-4">
                <input type="file" id="form6Example4" name="imagen" class="form-control" />
                <label class="form-label" for="form6Example4">Suba una imagen</label>
            </div>


            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" name="descripcion" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Descripcion del Post</label>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">Crear Post</button>
        </form>

        </Form>

    </div>



@stop
