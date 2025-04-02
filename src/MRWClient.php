<?php

namespace Kavinsky\MRW;

use Phpro\SoapClient\Caller\Caller;
use Kavinsky\MRW\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class MRWClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\TransmitirEnvio $parameters
     * @return ResultInterface & Type\TransmitirEnvioResponse
     * @throws SoapException
     */
    public function transmitirEnvio(\Kavinsky\MRW\Type\TransmitirEnvio $parameters) : \Kavinsky\MRW\Type\TransmitirEnvioResponse
    {
        $response = ($this->caller)('TransmitirEnvio', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\TransmitirEnvioResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\TransmitirEnvioEC $parameters
     * @return ResultInterface & Type\TransmitirEnvioECResponse
     * @throws SoapException
     */
    public function transmitirEnvioEC(\Kavinsky\MRW\Type\TransmitirEnvioEC $parameters) : \Kavinsky\MRW\Type\TransmitirEnvioECResponse
    {
        $response = ($this->caller)('TransmitirEnvioEC', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\TransmitirEnvioECResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\TransmEnvio $parameters
     * @return ResultInterface & Type\TransmEnvioResponse
     * @throws SoapException
     */
    public function transmEnvio(\Kavinsky\MRW\Type\TransmEnvio $parameters) : \Kavinsky\MRW\Type\TransmEnvioResponse
    {
        $response = ($this->caller)('TransmEnvio', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\TransmEnvioResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\TransmEnvioEC $parameters
     * @return ResultInterface & Type\TransmEnvioECResponse
     * @throws SoapException
     */
    public function transmEnvioEC(\Kavinsky\MRW\Type\TransmEnvioEC $parameters) : \Kavinsky\MRW\Type\TransmEnvioECResponse
    {
        $response = ($this->caller)('TransmEnvioEC', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\TransmEnvioECResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEtiquetaEnvio $parameters
     * @return ResultInterface & Type\GetEtiquetaEnvioResponse
     * @throws SoapException
     */
    public function etiquetaEnvio(\Kavinsky\MRW\Type\GetEtiquetaEnvio $parameters) : \Kavinsky\MRW\Type\GetEtiquetaEnvioResponse
    {
        $response = ($this->caller)('EtiquetaEnvio', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\GetEtiquetaEnvioResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\TransmEnvioInternacional $parameters
     * @return ResultInterface & Type\TransmEnvioInternacionalResponse
     * @throws SoapException
     */
    public function transmEnvioInternacional(\Kavinsky\MRW\Type\TransmEnvioInternacional $parameters) : \Kavinsky\MRW\Type\TransmEnvioInternacionalResponse
    {
        $response = ($this->caller)('TransmEnvioInternacional', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\TransmEnvioInternacionalResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetEtiquetaEnvioInternacional $parameters
     * @return ResultInterface & Type\GetEtiquetaEnvioInternacionalResponse
     * @throws SoapException
     */
    public function etiquetaEnvioInternacional(\Kavinsky\MRW\Type\GetEtiquetaEnvioInternacional $parameters) : \Kavinsky\MRW\Type\GetEtiquetaEnvioInternacionalResponse
    {
        $response = ($this->caller)('EtiquetaEnvioInternacional', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\GetEtiquetaEnvioInternacionalResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CancelarEnvio $parameters
     * @return ResultInterface & Type\CancelarEnvioResponse
     * @throws SoapException
     */
    public function cancelarEnvio(\Kavinsky\MRW\Type\CancelarEnvio $parameters) : \Kavinsky\MRW\Type\CancelarEnvioResponse
    {
        $response = ($this->caller)('CancelarEnvio', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\CancelarEnvioResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPointsDB $parameters
     * @return ResultInterface & Type\GetPointsDBResponse
     * @throws SoapException
     */
    public function pointsDB(\Kavinsky\MRW\Type\GetPointsDB $parameters) : \Kavinsky\MRW\Type\GetPointsDBResponse
    {
        $response = ($this->caller)('PointsDB', $parameters);

        \Psl\Type\instance_of(\Kavinsky\MRW\Type\GetPointsDBResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

