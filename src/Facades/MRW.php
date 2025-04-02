<?php

namespace Kavinsky\MRW\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kavinsky\MRW\MRW
 *
 * @method \Kavinsky\MRW\Type\TransmitirEnvioResponse transmitirEnvio(\Kavinsky\MRW\Type\TransmitirEnvio $parameters)
 * @method \Kavinsky\MRW\Type\TransmitirEnvioECResponse transmitirEnvioEC(\Kavinsky\MRW\Type\TransmitirEnvioEC $parameters)
 * @method \Kavinsky\MRW\Type\TransmEnvioResponse transmEnvio(\Kavinsky\MRW\Type\TransmEnvio $parameters)
 * @method \Kavinsky\MRW\Type\TransmEnvioECResponse transmEnvioEC(\Kavinsky\MRW\Type\TransmEnvioEC $parameters)
 * @method \Kavinsky\MRW\Type\GetEtiquetaEnvioResponse etiquetaEnvio(\Kavinsky\MRW\Type\GetEtiquetaEnvio $parameters)
 * @method \Kavinsky\MRW\Type\TransmEnvioInternacionalResponse transmEnvioInternacional(\Kavinsky\MRW\Type\TransmEnvioInternacional $parameters)
 * @method \Kavinsky\MRW\Type\GetEtiquetaEnvioInternacionalResponse etiquetaEnvioInternacional(\Kavinsky\MRW\Type\GetEtiquetaEnvioInternacional $parameters)
 * @method \Kavinsky\MRW\Type\CancelarEnvioResponse cancelarEnvio(\Kavinsky\MRW\Type\CancelarEnvio $parameters)
 * @method \Kavinsky\MRW\Type\GetPointsDBResponse pointsDB(\Kavinsky\MRW\Type\GetPointsDB $parameters)
 */
class MRW extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kavinsky\MRW\MRW::class;
    }
}
