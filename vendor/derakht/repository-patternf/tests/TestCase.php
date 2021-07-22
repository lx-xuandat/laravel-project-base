<?php

namespace Xuandat\RepositoryPattern\Tests;

use Orchestra\Testbench\TestCase as TestCaseAlias;
use Xuandat\RepositoryPattern\RepositoryPatternServiceProvider;

abstract class TestCase extends TestCaseAlias
{
    protected function getPackageProviders($app)
    {
        return [
            RepositoryPatternServiceProvider::class
        ];
    }
}
