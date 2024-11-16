<?php

declare(strict_types=1);

namespace ChrisOprea\MingCute;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeMingCuteIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory): void {
            $factory->add(
                set: 'mingcute-icons',
                options: [
                    'path' => __DIR__ . '/../resources/svg',
                    'prefix' => 'mingcute',
                ]
            );
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-mingcute-icons'),
            ], 'blade-mingcute-icons');
        }
    }
}
