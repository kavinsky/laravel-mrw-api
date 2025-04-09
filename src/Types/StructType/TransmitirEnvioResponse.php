<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for TransmitirEnvioResponse StructType
 */
#[AllowDynamicProperties]
class TransmitirEnvioResponse extends BaseResponse
{
    /**
     * The TransmitirEnvioResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\StructType\TransmitirEnvioResponse $TransmitirEnvioResult = null;

    /**
     * The NumEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumEnvio = null;

    /**
     * The Url
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Url = null;

    /**
     * Constructor method for TransmitirEnvioResponse
     *
     * @uses TransmitirEnvioResponse::setTransmitirEnvioResult()
     * @uses TransmitirEnvioResponse::setNumEnvio()
     * @uses TransmitirEnvioResponse::setUrl()
     */
    public function __construct(?\StructType\TransmitirEnvioResponse $transmitirEnvioResult = null, ?string $numEnvio = null, ?string $url = null)
    {
        $this
            ->setTransmitirEnvioResult($transmitirEnvioResult)
            ->setNumEnvio($numEnvio)
            ->setUrl($url);
    }

    /**
     * Get TransmitirEnvioResult value
     */
    public function getTransmitirEnvioResult(): ?\StructType\TransmitirEnvioResponse
    {
        return $this->TransmitirEnvioResult;
    }

    /**
     * Set TransmitirEnvioResult value
     *
     * @return \StructType\TransmitirEnvioResponse
     */
    public function setTransmitirEnvioResult(?\StructType\TransmitirEnvioResponse $transmitirEnvioResult = null): self
    {
        $this->TransmitirEnvioResult = $transmitirEnvioResult;

        return $this;
    }

    /**
     * Get NumEnvio value
     */
    public function getNumEnvio(): ?string
    {
        return $this->NumEnvio;
    }

    /**
     * Set NumEnvio value
     *
     * @return \StructType\TransmitirEnvioResponse
     */
    public function setNumEnvio(?string $numEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($numEnvio) && ! is_string($numEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numEnvio, true), gettype($numEnvio)), __LINE__);
        }
        $this->NumEnvio = $numEnvio;

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
     * @return \StructType\TransmitirEnvioResponse
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
