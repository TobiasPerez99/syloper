<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\PostRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show', 'store', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::All();

        return response()->json($post, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post;

        $post->titulo = $request->input('titulo');
        $post->slug = $request->input('slug');
        $post->descripcion = $request->input('descripcion');

        $status = $post->save();

        if ($status) {
            return response()->json(['msg' => 'El Post Fue Creado Exitosamente'], 201);
        }
        return response()->json(['msg' => 'Hubo un error al crear el post'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $search_by = $request->parameter;
        $search_value = $request->search_key;

        $columns = Schema::getColumnListing('posts');

        if (in_array($search_by, $columns)) {

            $post = Post::where($search_by, $search_value)->first();
            return response()->json($post, 201);

        } else {
            return response()->json('No se encuentra metodo de busqueda', 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        $post = Post::find($post)->first();
        if (is_null($post)) {
            return response()->json('Registro no encontrado', 404);
        }

        $post->delete();
        return response()->json(['El post fue eliminado exitosamente.']);

    }
}
