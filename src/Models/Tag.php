<?php

namespace FireAZ\News\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'new_tags';

    protected $fillable = [
        'slug',
        'title',
        'banner_image',
        'description',
        'tags',
        'intro',
    ];
}
