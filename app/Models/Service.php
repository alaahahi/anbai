<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'services';
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'icon',
        'active',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'Service');
    }

}
