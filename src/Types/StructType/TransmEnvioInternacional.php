<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransmEnvioInternacional StructType
 */
#[AllowDynamicProperties]
class TransmEnvioInternacional extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TransmEnvioIntRequest $request = null;

    /**
     * Constructor method for TransmEnvioInternacional
     *
     * @uses TransmEnvioInternacional::setRequest()
     */
    public function __construct(?TransmEnvioIntRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    /**
     * Get request value
     */
    public function getRequest(): ?TransmEnvioIntRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return \StructType\TransmEnvioInternacional
     */
    public function setRequest(?TransmEnvioIntRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
