<?php

namespace DevelopingSonder\SqlObjectSnapshot\Tests;

use Orchestra\Testbench\TestCase;
use DevelopingSonder\SqlObjectSnapshot\SqlObjectSnapshotServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SqlObjectSnapshotServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
