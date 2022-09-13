        @csrf

        <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="titulo" value="{{  $post->title  }}" id="form6Example1" class="form-control" />
                        <label class="form-label" for="form6Example1">Titulo Post</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="slug" value="{{ $posts->slug }}" id="form6Example2" class="form-control" />
                        <label class="form-label" for="form6Example2">Slug / Url</label>
                    </div>
                </div>
            </div>


            <div class="form-outline mb-4">
                <input type="file" id="form6Example4" name="imagen" value="{{ $posts->imagen }}" class="form-control" />
                <label class="form-label" for="form6Example4">Suba una imagen</label>
            </div>


            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" value="{{ $posts->descripcion }}" name="descripcion" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Descripcion del Post</label>
            </div>