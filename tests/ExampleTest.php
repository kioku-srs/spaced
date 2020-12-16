<?php

namespace KiokuSrs\Spaced\Tests;

use Orchestra\Testbench\TestCase;
use KiokuSrs\Spaced\SpacedServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SpacedServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
