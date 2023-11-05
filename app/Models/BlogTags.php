<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTags extends Model
{
    use HasFactory;

    protected $table = 'blog_tags';
    protected $fillable = [
        'tag_id',
        'post_id',
    ];

}
