<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class File extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'files';
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'category_id',
        'active',
        'title',
        'description',
        'file',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'File');
    }

}
