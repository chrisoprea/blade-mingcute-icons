<?php

declare(strict_types=1);

namespace ChrisOprea\MingCute;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeMingCuteIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory): void {
            $svgDir = __DIR__.'/../resources/svg';
            $directories = array_filter(glob($svgDir . '/*'), 'is_dir');

            $factory->add(
                set: 'mingcute-icons',
                options: [
                    'prefix' => config('blade-mingcute-icons.prefix'),
                    'path' => $svgDir,
                    'paths' => config('blade-mingcute-icons.with_categories') ? null : $directories,
                ]
            );
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-mingcute-icons.php', 'blade-mingcute-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-mingcute-icons'),
            ], 'blade-mingcute-icons');

            $this->publishes([
                __DIR__.'/../config/blade-mingcute-icons.php' => $this->app->configPath('blade-mingcute-icons.php'),
            ], 'blade-mingcute-icons-config');
        }
    }
}
