<?php

namespace DevelopingSonder\SqlObjectSnapshot;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DevelopingSonder\SqlObjectSnapshot\Skeleton\SkeletonClass
 */
class SqlObjectSnapshotFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sql-object-snapshot';
    }
}
