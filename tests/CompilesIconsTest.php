<?php

declare(strict_types=1);

namespace Tests;

use ChrisOprea\MingCute\BladeMingCuteIconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('mingcute-development.code_fill')->toHtml();

        $expected = file_get_contents('resources/svg/development/code_fill.svg');

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
