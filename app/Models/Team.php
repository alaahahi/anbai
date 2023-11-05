<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'teams';
    public $translatable = ['title', 'address', 'support', 'bio', 'position'];
    protected $fillable = [
        'team_member_type_id',
        'title',
        'email',
        'phone',
        'completed_projects',
        'address',
        'position',
        'experience',
        'support',
        'langs',
        'bio',
        'Join_at',
        'image',
        'order',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(TeamMemberType::class, 'team_member_type_id');
    }

    public function socials()
    {
        return $this->hasMany(Social::class,'parent_id','id');
    }


}
