<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for CancelarEnvioResponse StructType
 */
#[AllowDynamicProperties]
class CancelarEnvioResponse extends BaseResponse
{
    /**
     * The CancelarEnvioResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\StructType\CancelarEnvioResponse $CancelarEnvioResult = null;

    /**
     * The NumeroSolicitud
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroSolicitud = null;

    /**
     * The NumeroEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroEnvio = null;

    /**
     * Constructor method for CancelarEnvioResponse
     *
     * @uses CancelarEnvioResponse::setCancelarEnvioResult()
     * @uses CancelarEnvioResponse::setNumeroSolicitud()
     * @uses CancelarEnvioResponse::setNumeroEnvio()
     */
    public function __construct(?\StructType\CancelarEnvioResponse $cancelarEnvioResult = null, ?string $numeroSolicitud = null, ?string $numeroEnvio = null)
    {
        $this
            ->setCancelarEnvioResult($cancelarEnvioResult)
            ->setNumeroSolicitud($numeroSolicitud)
            ->setNumeroEnvio($numeroEnvio);
    }

    /**
     * Get CancelarEnvioResult value
     */
    public function getCancelarEnvioResult(): ?\StructType\CancelarEnvioResponse
    {
        return $this->CancelarEnvioResult;
    }

    /**
     * Set CancelarEnvioResult value
     *
     * @return \StructType\CancelarEnvioResponse
     */
    public function setCancelarEnvioResult(?\StructType\CancelarEnvioResponse $cancelarEnvioResult = null): self
    {
        $this->CancelarEnvioResult = $cancelarEnvioResult;

        return $this;
    }

    /**
     * Get NumeroSolicitud value
     */
    public function getNumeroSolicitud(): ?string
    {
        return $this->NumeroSolicitud;
    }

    /**
     * Set NumeroSolicitud value
     *
     * @return \StructType\CancelarEnvioResponse
     */
    public function setNumeroSolicitud(?string $numeroSolicitud = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroSolicitud) && ! is_string($numeroSolicitud)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSolicitud, true), gettype($numeroSolicitud)), __LINE__);
        }
        $this->NumeroSolicitud = $numeroSolicitud;

        return $this;
    }

    /**
     * Get NumeroEnvio value
     */
    public function getNumeroEnvio(): ?string
    {
        return $this->NumeroEnvio;
    }

    /**
     * Set NumeroEnvio value
     *
     * @return \StructType\CancelarEnvioResponse
     */
    public function setNumeroEnvio(?string $numeroEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroEnvio) && ! is_string($numeroEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroEnvio, true), gettype($numeroEnvio)), __LINE__);
        }
        $this->NumeroEnvio = $numeroEnvio;

        return $this;
    }
}
