<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;

    protected $table = 'blog_comments';
    protected $fillable = [
        'active',
        'user_id',
        'blog_id',
        'parent_id',
        'comment',
    ];

    public function post()
    {
        return $this->belongsTo(Blog::class);
    }
}
