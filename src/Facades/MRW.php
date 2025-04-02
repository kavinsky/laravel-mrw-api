<?php

namespace Kavinsky\MRW\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kavinsky\MRW\MRW
 */
class MRW extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kavinsky\MRW\MRW::class;
    }
}
