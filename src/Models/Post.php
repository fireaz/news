<?php

namespace FireAZ\News\Models;

use FireAZ\Platform\Traits\WithSlug;
use FireAZ\Seo\Sitemap\WithSitemapModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use WithSlug;
    use WithSitemapModel;
    public function getUrl()
    {
        return route('news.post', ['slug' => $this->slug,]);
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getLastUpdate()
    {
        return $this->updated_at;
    }
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
