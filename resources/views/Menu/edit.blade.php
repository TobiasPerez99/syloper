@extends('layouts.dashboard')
@section('content')

<div class="row">    
    <div class="col-lg-12">
        <div class="p-2">
            <form action="{{route('menu.update' , $menu)}}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="nombre" value="{{ old('nombre', $menu->nombre) }}" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="url" value="{{ old('url', $menu->url) }}"  id="url" placeholder="URL">
                    </div>
                </div>
                <div class="form-group">                    
                    <div class="form-group">
                      <label for="">Descripcion : </label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{ old('descripcion', $menu->descripcion) }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="">Target</label>
                        <select class="form-control" name="target" id="target">
                            <option {{ $menu->target == '_blank' ? 'selected' : '' }} value="_blank">_blank</option>
                            <option {{ $menu->target == '_self' ? 'selected' : '' }} value="_self">_self</option>                    
                        </select> 
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="">Activo</label>
                        <select class="form-control" name="estado" id="estado">                            
                            <option {{ $menu->estado == '1' ? 'selected' : '' }} value="1">Activo</option>
                            <option {{ $menu->estado == '0' ? 'selected' : '' }} value="0">Inactivo</option>                    
                        </select> 
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="">Icono</label>
                        <input type="text" value="{{ old('icono', $menu->icono) }}" class="form-control form-control-user" id="icono" placeholder="Icono">
                        <small><a href="#">Iconos Disponibles</a></small>
                    </div>
                </div>
                <hr>
                <button class="btn btn-facebook btn-user btn-block" type="submit">Editar Menu</button>
            </form>
            <hr>
        </div>
    </div>
</div>

@stop