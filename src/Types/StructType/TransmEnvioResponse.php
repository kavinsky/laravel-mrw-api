<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for TransmEnvioResponse StructType
 */
#[AllowDynamicProperties]
class TransmEnvioResponse extends BaseResponse
{
    /**
     * The TransmEnvioResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?self $TransmEnvioResult = null;

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
     * The Url
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Url = null;

    /**
     * Constructor method for TransmEnvioResponse
     *
     * @uses TransmEnvioResponse::setTransmEnvioResult()
     * @uses TransmEnvioResponse::setNumeroSolicitud()
     * @uses TransmEnvioResponse::setNumeroEnvio()
     * @uses TransmEnvioResponse::setUrl()
     */
    public function __construct(?\StructType\TransmEnvioResponse $transmEnvioResult = null, ?string $numeroSolicitud = null, ?string $numeroEnvio = null, ?string $url = null)
    {
        $this
            ->setTransmEnvioResult($transmEnvioResult)
            ->setNumeroSolicitud($numeroSolicitud)
            ->setNumeroEnvio($numeroEnvio)
            ->setUrl($url);
    }

    /**
     * Get TransmEnvioResult value
     */
    public function getTransmEnvioResult(): ?\StructType\TransmEnvioResponse
    {
        return $this->TransmEnvioResult;
    }

    /**
     * Set TransmEnvioResult value
     *
     * @return \StructType\TransmEnvioResponse
     */
    public function setTransmEnvioResult(?\StructType\TransmEnvioResponse $transmEnvioResult = null): self
    {
        $this->TransmEnvioResult = $transmEnvioResult;

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
     * @return \StructType\TransmEnvioResponse
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
     * @return \StructType\TransmEnvioResponse
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

    /**
     * Get Url value
     */
    public function getUrl(): ?string
    {
        return $this->Url;
    }

    /**
     * Set Url value
     *
     * @return \StructType\TransmEnvioResponse
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (! is_null($url) && ! is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->Url = $url;

        return $this;
    }
}
