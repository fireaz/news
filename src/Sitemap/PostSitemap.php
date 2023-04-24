<?php

namespace FireAZ\News\Sitemap;

use FireAZ\Seo\Sitemap\Sub\ModelSitemap;
use FireAZ\News\Models\Post;

class PostSitemap extends ModelSitemap
{
    public function __construct()
    {
        parent::__construct('post', Post::class);
    }
}
