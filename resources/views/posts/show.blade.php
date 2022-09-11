<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a class="btn btn-primary m-3" href="{{ route('post.edit' , $post->slug) }}" role="button">Editar Proyecto</a>

                <form action="{{ route('post.destroy' , $post) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class=" m-3 btn btn-danger">Eliminar</button>

                </form>


    <hr>

        <h1>{{ $post->titulo }}</h1>
        <h3>{{ $post->descripcion }}</h3>
        <h4>{{ $post->created_at }}</h4>

</body>
</html>