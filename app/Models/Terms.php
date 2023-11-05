<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Terms extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'terms';
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'title',
        'description',
    ];


}
