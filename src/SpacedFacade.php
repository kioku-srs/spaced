<?php

namespace KiokuSrs\Spaced;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KiokuSrs\Spaced\Skeleton\SkeletonClass
 */
class SpacedFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'spaced';
    }
}
