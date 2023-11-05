<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Customize extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'customizes';
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'base_module_name',
        'title',
        'description',
        'image',
        'active_navbar',
        'active_home',
        'active_dashboard',
        'link',
        'order',
    ];




}
