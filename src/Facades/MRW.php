<?php

namespace Kavinsky\MRW\Facades;

use Kavinsky\MRW\Types\ServiceType\Transm;
use Kavinsky\MRW\Types\ServiceType\Transmitir;
use Kavinsky\MRW\Types\ServiceType\Cancelar;
use Kavinsky\MRW\Types\ServiceType\Points;
use Kavinsky\MRW\Types\ServiceType\Etiqueta;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Kavinsky\MRW\MRW
 *
 * @method static Transm trasm()
 * @method static Transmitir transmitir()
 * @method static Cancelar cancelar()
 * @method static Points points()
 * @method static Etiqueta etiqueta()
 */
class MRW extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kavinsky\MRW\MRW::class;
    }
}
