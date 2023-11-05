<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'testimonials';
    public $translatable = ['name', 'description'];
    protected $fillable = [
        'name',
        'company',
        'description',
        'image',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'Testimonial');
    }

}
