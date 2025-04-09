<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransmEnvioECResponse StructType
 */
#[AllowDynamicProperties]
class TransmEnvioECResponse extends AbstractStructBase
{
    /**
     * The TransmEnvioECResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TransEnvioECResponse $TransmEnvioECResult = null;

    /**
     * Constructor method for TransmEnvioECResponse
     *
     * @uses TransmEnvioECResponse::setTransmEnvioECResult()
     */
    public function __construct(?TransEnvioECResponse $transmEnvioECResult = null)
    {
        $this
            ->setTransmEnvioECResult($transmEnvioECResult);
    }

    /**
     * Get TransmEnvioECResult value
     */
    public function getTransmEnvioECResult(): ?TransEnvioECResponse
    {
        return $this->TransmEnvioECResult;
    }

    /**
     * Set TransmEnvioECResult value
     *
     * @return \StructType\TransmEnvioECResponse
     */
    public function setTransmEnvioECResult(?TransEnvioECResponse $transmEnvioECResult = null): self
    {
        $this->TransmEnvioECResult = $transmEnvioECResult;

        return $this;
    }
}
