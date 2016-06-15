<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Models\Blog;

class Blog extends Model
{
    protected $fillable = ['title','description','image','username'];
}
