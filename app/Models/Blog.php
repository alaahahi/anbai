<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = [
        'category_id',
        'active',
        'trending',
        'featured',
        'lang',
        'writer',
        'title',
        'description',
        'image',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'Blog');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tags');
    }

    public function comments()
    {
        return $this->hasMany(BlogComments::class)->where('active', 1);
    }

}
