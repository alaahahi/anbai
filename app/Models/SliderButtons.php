<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderButtons extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'slider_buttons';
    public $translatable = ['button_title'];
    protected $fillable = [
        'slider_id',
        'button_title',
        'url_page',
        'order',
    ];

}
