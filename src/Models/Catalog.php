<?php

namespace FireAZ\News\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{

    protected $table = 'new_catalogs';

    protected $fillable = [
        'slug',
        'title',
        'banner_image',
        'description',
        'tags',
        'intro',
        'is_active',
    ];
}
