<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo' , 'descripcion' , 'slug'];
    protected $table = "posts";

    public function getRouteKeyName()
    {
        return 'slug';
    }
 
}
