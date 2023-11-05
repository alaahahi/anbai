<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'lang',
        'title',
    ];

    public function blogs()
    {
        return $this->belongsToMany(Tag::class,'blog_tags');
    }

}
