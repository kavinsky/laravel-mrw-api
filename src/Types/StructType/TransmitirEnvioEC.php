<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransmitirEnvioEC StructType
 */
#[AllowDynamicProperties]
class TransmitirEnvioEC extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TransmitirEnvioECRequest $request = null;

    /**
     * Constructor method for TransmitirEnvioEC
     *
     * @uses TransmitirEnvioEC::setRequest()
     */
    public function __construct(?TransmitirEnvioECRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    /**
     * Get request value
     */
    public function getRequest(): ?TransmitirEnvioECRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return \StructType\TransmitirEnvioEC
     */
    public function setRequest(?TransmitirEnvioECRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
