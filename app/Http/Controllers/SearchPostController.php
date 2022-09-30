<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Http\Controllers\Controller;
use Spatie\Searchable\ModelSearchAspect;

class SearchPostController extends Controller
{
    public function search(Request $request)
    {

        $searchterm = $request->input('search');

        $post = (new Search())->registerModel(Post::class, ['titulo', 'descripcion'])->search($request->search);

        return view('pages.show-search', compact('post', 'searchterm'));
    }
}
