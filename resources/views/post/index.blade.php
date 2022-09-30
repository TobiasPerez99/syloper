@extends('layouts.dashboard')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posts</h1>
    <a href="{{route('post.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50">
            </i> Crear Post </a>
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
                                        style="width: 123px;">Imagen
                                    </th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            style="width: 123px;">Titulo
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 123px;">Slug</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 123px;">Descripcion</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 95px;">Estado</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 123px;">Acciones</th>
                                    </tr>
                                </thead>                                
                                <tbody>                                
                                    @foreach ($post ?? '' as $post_item)
                                    <tr class="odd">
                                        <td class="sorting_1">
                                            @if ($post_item->imagen)
                                                <img src="{{ Storage::url($post_item->imagen) }}" class="img-fluid ${3|rounded-top,rounded-rigrounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                            @endif    
                                        </td>                                        
                                        <td class="sorting_1">{{Illuminate\Support\Str::limit($post_item->titulo , 15)}}</td>                                        
                                        <td class="sorting_1">{{Illuminate\Support\Str::limit($post_item->slug,15)}}</td>                                        
                                        <td class="sorting_1">{{Illuminate\Support\Str::limit($post_item->descripcion , 15)}}</td>                                                                                
                                        <td>
                                            <form action="{{ route('post.destroy', $post_item) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Eliminar
                                                </button>
                                    
                                                <a class="btn btn-info btn-sm" href="{{ route('post.edit', $post_item) }}" role="button">Editar</a>
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
