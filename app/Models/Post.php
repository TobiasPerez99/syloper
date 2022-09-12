<?php

namespace App\Models;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = ['titulo' , 'descripcion' , 'slug'];
    protected $table = "posts";

    public $searchableType = 'post';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult($this, $this->titulo, route('post.show', $this->slug));
    }
 
}
