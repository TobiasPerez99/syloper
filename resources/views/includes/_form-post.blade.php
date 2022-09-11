        @csrf

        <label for="">Titulo :</label>
        <input type="text" name="titulo" value="{{ $posts->titulo }}">            

        <label for="">Slug :</label>
        <input type="text" name="slug" value="{{ $posts->slug }}">

        <label for="">Descripcion : </label>
        <input type="text" name="descripcion" value="{{ $posts->descripcion }}">