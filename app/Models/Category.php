<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $table = 'categories';
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'model',
        'category_id',
        'active',
        'title',
        'description',
        'image',
        'order',
        'slug',
        'slug_title',
        'slug_keywords',
        'slug_description',
        'graph_title',
        'graph_type',
        'graph_image',
        'graph_url',
    ];

    // public function about()
    // {
    //     return $this->hasMany(About::class);
    // }

    // public function clients()
    // {
    //     return $this->hasMany(Client::class);
    // }

    // public function contacts()
    // {
    //     return $this->hasMany(Contact::class);
    // }

    // public function faqs()
    // {
    //     return $this->hasMany(Faq::class);
    // }

    // public function files()
    // {
    //     return $this->hasMany(File::class);
    // }

    // public function messages()
    // {
    //     return $this->hasMany(Message::class);
    // }

    // public function packages()
    // {
    //     return $this->hasMany(Package::class);
    // }

    // public function projects()
    // {
    //     return $this->hasMany(Project::class);
    // }

    // public function services()
    // {
    //     return $this->hasMany(Service::class);
    // }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    
    // public function sliders()
    // {
    //     return $this->hasMany(Slider::class);
    // }

    // public function posts()
    // {
    //     return $this->hasMany(Blog::class);
    // }



}
