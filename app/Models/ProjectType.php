<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class ProjectType extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = ['id'];

    public $translatable = ['type'];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
