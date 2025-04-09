<?php

namespace Kavinsky\MRW\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kavinsky\MRW\MRW
 *
 * @method static \Kavinsky\MRW\Types\ServiceType\Transm trasm()
 * @method static \Kavinsky\MRW\Types\ServiceType\Transmitir transmitir()
 * @method static \Kavinsky\MRW\Types\ServiceType\Cancelar cancelar()
 * @method static \Kavinsky\MRW\Types\ServiceType\Points points()
 * @method static \Kavinsky\MRW\Types\ServiceType\Etiqueta etiqueta()
 */
class MRW extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kavinsky\MRW\MRW::class;
    }
}
