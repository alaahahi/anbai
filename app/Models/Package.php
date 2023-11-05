<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'files';
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'original_price',
        'selling_price',
        'image',
        'active',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'Package');
    }

}
