<?php

namespace Kavinsky\MRW;

use Kavinsky\MRW\Type\CancelarEnvio;
use Kavinsky\MRW\Type\CancelarEnvioResponse;
use Kavinsky\MRW\Type\GetEtiquetaEnvio;
use Kavinsky\MRW\Type\GetEtiquetaEnvioInternacional;
use Kavinsky\MRW\Type\GetEtiquetaEnvioInternacionalResponse;
use Kavinsky\MRW\Type\GetEtiquetaEnvioResponse;
use Kavinsky\MRW\Type\GetPointsDB;
use Kavinsky\MRW\Type\GetPointsDBResponse;
use Kavinsky\MRW\Type\TransmEnvio;
use Kavinsky\MRW\Type\TransmEnvioEC;
use Kavinsky\MRW\Type\TransmEnvioECResponse;
use Kavinsky\MRW\Type\TransmEnvioInternacional;
use Kavinsky\MRW\Type\TransmEnvioInternacionalResponse;
use Kavinsky\MRW\Type\TransmEnvioResponse;
use Kavinsky\MRW\Type\TransmitirEnvio;
use Kavinsky\MRW\Type\TransmitirEnvioEC;
use Kavinsky\MRW\Type\TransmitirEnvioECResponse;
use Kavinsky\MRW\Type\TransmitirEnvioResponse;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\ResultInterface;

use function Psl\Type\instance_of;

class Client
{
    public function __construct(private Caller $caller) {}

    /**
     * @throws SoapException
     */
    public function transmitirEnvio(TransmitirEnvio $parameters): TransmitirEnvioResponse
    {
        $response = ($this->caller)('TransmitirEnvio', $parameters);

        instance_of(TransmitirEnvioResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function transmitirEnvioEC(TransmitirEnvioEC $parameters): TransmitirEnvioECResponse
    {
        $response = ($this->caller)('TransmitirEnvioEC', $parameters);

        instance_of(TransmitirEnvioECResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function transmEnvio(TransmEnvio $parameters): TransmEnvioResponse
    {
        $response = ($this->caller)('TransmEnvio', $parameters);

        instance_of(TransmEnvioResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function transmEnvioEC(TransmEnvioEC $parameters): TransmEnvioECResponse
    {
        $response = ($this->caller)('TransmEnvioEC', $parameters);

        instance_of(TransmEnvioECResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function etiquetaEnvio(GetEtiquetaEnvio $parameters): GetEtiquetaEnvioResponse
    {
        $response = ($this->caller)('EtiquetaEnvio', $parameters);

        instance_of(GetEtiquetaEnvioResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function transmEnvioInternacional(TransmEnvioInternacional $parameters): TransmEnvioInternacionalResponse
    {
        $response = ($this->caller)('TransmEnvioInternacional', $parameters);

        instance_of(TransmEnvioInternacionalResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function etiquetaEnvioInternacional(GetEtiquetaEnvioInternacional $parameters): GetEtiquetaEnvioInternacionalResponse
    {
        $response = ($this->caller)('EtiquetaEnvioInternacional', $parameters);

        instance_of(GetEtiquetaEnvioInternacionalResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function cancelarEnvio(CancelarEnvio $parameters): CancelarEnvioResponse
    {
        $response = ($this->caller)('CancelarEnvio', $parameters);

        instance_of(CancelarEnvioResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @throws SoapException
     */
    public function pointsDB(GetPointsDB $parameters): GetPointsDBResponse
    {
        $response = ($this->caller)('PointsDB', $parameters);

        instance_of(GetPointsDBResponse::class)->assert($response);
        instance_of(ResultInterface::class)->assert($response);

        return $response;
    }
}
