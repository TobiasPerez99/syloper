<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <Form action="{{ route('post.update' , $posts) }}" method="POST" enctype="multipart/form-data">
            
        <input type="hidden" name="_method" value="PATCH">

        
        
       

        <button type="submit">Actualizar Post</button>

    </Form>
</body>
</html>