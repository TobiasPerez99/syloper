@extends('layouts.default')
@section('content')


    <Form action="{{ route('post.update' , $posts) }}" method="POST" enctype="multipart/form-data">
            
        <input type="hidden" name="_method" value="PATCH">

        @include('includes._form-post')       

        <button type="submit">Actualizar Post</button>

    </Form>
@stop