<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransmitirEnvio StructType
 */
#[AllowDynamicProperties]
class TransmitirEnvio extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TransmitirEnvioRequest $request = null;

    /**
     * Constructor method for TransmitirEnvio
     *
     * @uses TransmitirEnvio::setRequest()
     */
    public function __construct(?TransmitirEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    /**
     * Get request value
     */
    public function getRequest(): ?TransmitirEnvioRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return \StructType\TransmitirEnvio
     */
    public function setRequest(?TransmitirEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
