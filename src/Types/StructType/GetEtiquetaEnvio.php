<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEtiquetaEnvio StructType
 */
#[AllowDynamicProperties]
class GetEtiquetaEnvio extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?EtiquetaEnvioRequest $request = null;

    /**
     * Constructor method for GetEtiquetaEnvio
     *
     * @uses GetEtiquetaEnvio::setRequest()
     */
    public function __construct(?EtiquetaEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    /**
     * Get request value
     */
    public function getRequest(): ?EtiquetaEnvioRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return \StructType\GetEtiquetaEnvio
     */
    public function setRequest(?EtiquetaEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
