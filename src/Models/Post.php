<?php

namespace FireAZ\News\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'new_posts';

    protected $fillable = [
        'slug',
        'title',
        'link_ref',
        'banner_image',
        'description',
        'tags',
        'data',
        'summary',
        'content',
        'content_type',
        'layout',
        'data_prev',
        'level_data',
        'view_count',
        'rate_number',
        'publish_at',
        'is_active',
    ];
}
