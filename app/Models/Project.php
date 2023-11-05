<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'projects';
    public $translatable = ['name', 'client', 'city', 'description'];
    protected $fillable = [
        'project_type_id',
        'name',
        'client',
        'city',
        'consultant',
        'contract_duration',
        'contract_value',
        'description',
        'start',
        'end_date',
        'image',
        'status',
        'active',
        'order',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(ProjectType::class, 'project_type_id');
    }

    public function images()
    {
        return $this->hasMany(ProjectImages::class);
    }


}
