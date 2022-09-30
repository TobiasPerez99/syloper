@extends('layouts.dashboard')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Menu</h1>
    <a href="{{route('menu.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50">
            </i> Crear Menu </a>
</div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            style="width: 123px;">Nombre
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 123px;">URL</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 123px;">Descripcion</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 95px;">Estado</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 123px;">Acciones</th>
                                    </tr>
                                </thead>                                
                                <tbody>                                
                                    @foreach ($menus ?? '' as $menu_item)                                    
                                    <tr class="odd">
                                        <td class="sorting_1">{{$menu_item->nombre}}</td>
                                        <td>{{Illuminate\Support\Str::limit($menu_item->url , 15 )}}</td>
                                        <td>{{Illuminate\Support\Str::limit($menu_item->descripcion , 15)}}</td>
                                        <td>{{$menu_item->estado = '1' ? 'Activo'  : 'Inactivo'}}</td>
                                        <td>
                                            <form action="{{ route('menu.destroy', $menu_item) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Eliminar
                                                </button>
                                    
                                                <a class="btn btn-info btn-sm" href="{{ route('menu.edit', $menu_item) }}" role="button">Editar</a>
                                            </form>                                            
                                        </td>
                                    </tr>
                                    @endforeach                                                         
                                </tbody>
                            </table>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@stop
