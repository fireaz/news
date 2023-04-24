<?php

namespace FireAZ\News;

use Illuminate\Support\ServiceProvider;
use FireAZ\LaravelPackage\ServicePackage;
use FireAZ\News\Sitemap\PostSitemap;
use FireAZ\Platform\Traits\WithServiceProvider;
use FireAZ\Seo\Facades\Sitemap;

class NewsServiceProvider extends ServiceProvider
{
    use WithServiceProvider;

    public function configurePackage(ServicePackage $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('news')
            ->hasConfigFile()
            ->hasViews()
            ->hasHelpers()
            ->hasAssets()
            ->hasTranslations()
            ->runsMigrations();
    }
    public function extending()
    {
    }
    public function packageRegistered()
    {
        $this->extending();
    }
    private function bootGate()
    {
        if (!$this->app->runningInConsole()) {
            add_filter(PLATFORM_PERMISSION_CUSTOME, function ($prev) {
                return [
                    ...$prev
                ];
            });
        }

        Sitemap::AddSitemap(PostSitemap::class);
    }
    public function packageBooted()
    {
        $this->bootGate();
    }
}
