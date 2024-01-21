<?php

namespace Seat\HermesDj\Config;

use Seat\Services\AbstractSeatPlugin;

class ConfigServiceProvider extends AbstractSeatPlugin
{

    public function boot()
    {
        $this->mergeConfigFrom($config = __DIR__ . '/Config/eseye-cache.php', 'cache.stores');
        if ($this->app->runningInConsole()) {
            $this->publishes([$config => config_path('eseye-cache.php')], ['seat', 'eseye', 'config']);
        }
    }

    public function getName(): string
    {
        return "seat-config";
    }

    public function getPackageRepositoryUrl(): string
    {
        return "https://github.com/hermesdj/seat-config";
    }

    public function getPackagistPackageName(): string
    {
        return "seat-config";
    }

    public function getPackagistVendorName(): string
    {
        return "hermesdj";
    }
}