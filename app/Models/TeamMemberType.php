<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class TeamMemberType extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = ['id'];

    public $translatable = ['type'];

    public function members(): HasMany
    {
        return $this->hasMany(Team::class);
    }
}
