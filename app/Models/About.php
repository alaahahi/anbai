<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'abouts';
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'category_id',
        'active',
        'title',
        'description',
        'image',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'About');
    }


}
