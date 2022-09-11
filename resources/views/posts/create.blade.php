<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <Form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            
        @csrf
        
        <label for="">Titulo :</label>
        <input type="text" name="titulo" value="{{ old('title') }}">            

        <label for="">Slug :</label>
        <input type="text" name="slug" value="{{ old('slug') }}">

        <label for="">Descripcion : </label>
        <input type="text" name="descripcion" value="{{ old('descripcion') }}">

        <button type="submit">Crear Post</button>

    </Form>
</body>
</html>