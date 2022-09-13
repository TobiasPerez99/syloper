<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(15);

        return view('pages.home')->with('post', $post);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('posts.create', [
            'post' => new Post,
        ]);
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

        if ($request->hasFile('imagen')) {

            $path = $request->file('imagen')->store('public/images');

        }

        $post->titulo = $request->input('titulo');
        $post->slug = $request->input('slug');
        $post->descripcion = $request->input('descripcion');
        $post->imagen = $path;
        $status = $post->save();

        if ($status) {
            return redirect()->route('post.index')->with('store', 'El Post Fue creado Exitosamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {

        if ($request->hasFile('imagen')) {

            Storage::delete($post->imagen);

            $post->imagen = $request->file('imagen')->store('public/images');
        }

        $post->titulo = $request->input('titulo');
        $post->descripcion = $request->input('descripcion');
        $post->slug = $request->input('slug');

        $status = $post->update();

        if ($status) {
            return redirect()->route('post.index')->with('update', 'El Post Fue Actualizado Exitosamente');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->imagen);

        $post->delete();

        return redirect()->route('post.index')->with('destroy', 'El Post Fue Eliminado Exitosamente');
    }
}
