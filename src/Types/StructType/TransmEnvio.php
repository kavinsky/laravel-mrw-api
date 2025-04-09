<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransmEnvio StructType
 */
#[AllowDynamicProperties]
class TransmEnvio extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TransmEnvioRequest $request = null;

    /**
     * Constructor method for TransmEnvio
     *
     * @uses TransmEnvio::setRequest()
     */
    public function __construct(?TransmEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    /**
     * Get request value
     */
    public function getRequest(): ?TransmEnvioRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return \StructType\TransmEnvio
     */
    public function setRequest(?TransmEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
