<?php

declare(strict_types=1);

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use ChrisOprea\MingCute\BladeMingCuteIconsServiceProvider;
use Illuminate\Support\Facades\Config;
use Orchestra\Testbench\TestCase;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        Config::set('blade-mingcute-icons.with_categories', false);
        $result = svg('mingcute-code-fill')->toHtml();

        $expected = file_get_contents('resources/svg/development/code-fill.svg');

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_compiles_a_category_anonymous_component()
    {
        Config::set('blade-mingcute-icons.with_categories', true);
        $result = svg('mingcute-development.code-fill')->toHtml();

        $expected = file_get_contents('resources/svg/development/code-fill.svg');

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeMingCuteIconsServiceProvider::class,
        ];
    }
}
