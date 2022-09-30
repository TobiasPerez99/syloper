@extends('layouts.dashboard')
@section('content')

<div class="row">    
    <div class="col-lg-12">
        <div class="p-2">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">                
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="titulo" value="{{ old('titulo') }}" id="titulo" placeholder="titulo">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="slug" value="{{ old('slug') }}"  id="slug" placeholder="slug">
                    </div>
                </div>
                <div class="form-group">                    
                    <div class="form-group">
                      <label for="">Descripcion : </label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="10">{{ old('descripcion') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">                                    
                    <div class="col-sm-12 mb-3 mb-sm-0">

                    <input type="file" id="form6Example4" name="imagen" class="form-control" />
                    <label class="form-label" for="form6Example4">Suba una imagen</label>
                    </div>
                </div>
                <hr>
                <button class="btn btn-facebook btn-user btn-block" type="submit">Crear Post</button>
            </form>
            <hr>
        </div>
    </div>
</div>

@stop