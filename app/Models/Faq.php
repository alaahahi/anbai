<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'faqs';
    public $translatable = ['question', 'answer'];
    protected $fillable = [
        'question',
        'answer',
        'active',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'Faq');
    }



}
