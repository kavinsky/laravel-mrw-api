<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelarEnvio StructType
 */
#[AllowDynamicProperties]
class CancelarEnvio extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CancelarEnvioRequest $request = null;

    /**
     * Constructor method for CancelarEnvio
     *
     * @uses CancelarEnvio::setRequest()
     */
    public function __construct(?CancelarEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    /**
     * Get request value
     */
    public function getRequest(): ?CancelarEnvioRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return \StructType\CancelarEnvio
     */
    public function setRequest(?CancelarEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
