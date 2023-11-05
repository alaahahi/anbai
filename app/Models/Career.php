<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Career extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $table = 'careers';
    public $translatable = ['title', 'description', 'location', 'experiance'];
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'Job_type',
        'expected_salary',
        'location',
        'role',
        'experiance',
        'image',
        'order',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('model', 'Career');
    }


}
