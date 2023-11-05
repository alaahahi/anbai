<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Client extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'clients';
    public $translatable = ['name'];
    protected $fillable = [
        'category_id',
        'name',
        'email',
        'phone',
        'link',
        'image',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'Client');
    }


}
