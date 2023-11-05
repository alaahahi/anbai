<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'settings';

    public $translatable = ['site_title', 'description'];

    protected $fillable = [
        'full_name_admin',
        'site_title',
        'email',
        'phone',
        'description',
        'logo',
        'logo_white',
        'logo_sm',
        'logo_sm_white',
        'icon',
        'copy_right',
        'seo_title',
        'seo_description',
        'seo_slug',
        'seo_Keyword',
        'graph_title',
        'graph_type',
        'graph_image_alt',
        'grap_url',
    ];




}
