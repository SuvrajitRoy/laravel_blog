<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Models\Article;

class Article extends Model
{
    protected $table = 'articles';
     protected $fillable = ['title','description','image','created_by','updated_by'];
}
