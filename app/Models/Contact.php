<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'contacts';
    public $translatable = ['title', 'address', 'location'];
    protected $fillable = [
        'id',
        'title',
        'phone',
        'office_phone',
        'fax',
        'email',
        'address',
        'location',
        'from_hour',
        'to_hour',
        'from_day',
        'to_day',
        'maps',
        'image',
        'icon',
        'order_timeline',
        'branch_date',
        'order',
    ];


}
