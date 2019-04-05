<?php

namespace Statamic\Addons\BladeSvg;

use Statamic\API\File;
use Statamic\API\Config;
use Illuminate\Support\Collection;
use Statamic\Extend\ServiceProvider;
use Statamic\Addons\BladeSvg\SvgFactory;

class BladeSvgServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        app(SvgFactory::class)->registerBladeTag();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SvgFactory::class, function () {
            $webroot = getcwd();

            $config = Collection::make([])->merge([
                'spritesheet_url' => $this->getConfig('svg_spritesheet_url'),
                'spritesheet_path' => $webroot.$this->getConfig('svg_spritesheet_path'),
                'svg_path' => $webroot.$this->getConfig('svg_path'),
                'inline' => $this->getConfig('svg_inline'),
                'class' => $this->getConfig('svg_class'),
            ])->all();

            return new SvgFactory($config);
        });

        require_once(__DIR__.'/helpers.php');
    }
}
