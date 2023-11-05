<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    protected $table = 'socials';
    protected $fillable = [
        'parent_id',
        'link_first',
        'link_last',
        'title',
        'icon',
        'order',
    ];

}
