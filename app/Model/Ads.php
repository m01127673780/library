<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table    = 'ads';
    protected $fillable = [
        'link',

        'title_en',
        'title_ar',
        'content_en',
        'content_ar',
        'start_at',
        'end_at',
        'photo',

    ];

}
