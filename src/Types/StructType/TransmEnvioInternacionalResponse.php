<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransmEnvioInternacionalResponse StructType
 */
#[AllowDynamicProperties]
class TransmEnvioInternacionalResponse extends AbstractStructBase
{
    /**
     * The TransmEnvioInternacionalResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TransmEnvioResponse $TransmEnvioInternacionalResult = null;

    /**
     * Constructor method for TransmEnvioInternacionalResponse
     *
     * @uses TransmEnvioInternacionalResponse::setTransmEnvioInternacionalResult()
     */
    public function __construct(?TransmEnvioResponse $transmEnvioInternacionalResult = null)
    {
        $this
            ->setTransmEnvioInternacionalResult($transmEnvioInternacionalResult);
    }

    /**
     * Get TransmEnvioInternacionalResult value
     */
    public function getTransmEnvioInternacionalResult(): ?TransmEnvioResponse
    {
        return $this->TransmEnvioInternacionalResult;
    }

    /**
     * Set TransmEnvioInternacionalResult value
     *
     * @return \StructType\TransmEnvioInternacionalResponse
     */
    public function setTransmEnvioInternacionalResult(?TransmEnvioResponse $transmEnvioInternacionalResult = null): self
    {
        $this->TransmEnvioInternacionalResult = $transmEnvioInternacionalResult;

        return $this;
    }
}
