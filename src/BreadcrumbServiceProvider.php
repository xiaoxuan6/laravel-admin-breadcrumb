<?php

namespace James\Admin\Breadcrumb;

use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {

        if (!config('admin.extensions.breadcrumb.enable', 'true')) {
            return;
        }

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../resources/views/content.blade.php' => resource_path('views/admin/content.blade.php')],'breadcrumb');
        }

    }

}