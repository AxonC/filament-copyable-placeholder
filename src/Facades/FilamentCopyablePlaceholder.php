<?php

namespace AxonC\FilamentCopyablePlaceholder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AxonC\FilamentCopyablePlaceholder\FilamentCopyablePlaceholder
 */
class FilamentCopyablePlaceholder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AxonC\FilamentCopyablePlaceholder\FilamentCopyablePlaceholder::class;
    }
}
