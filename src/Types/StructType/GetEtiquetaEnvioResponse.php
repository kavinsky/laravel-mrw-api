<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEtiquetaEnvioResponse StructType
 */
#[AllowDynamicProperties]
class GetEtiquetaEnvioResponse extends AbstractStructBase
{
    /**
     * The GetEtiquetaEnvioResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?EtiquetaEnvioResponse $GetEtiquetaEnvioResult = null;

    /**
     * Constructor method for GetEtiquetaEnvioResponse
     *
     * @uses GetEtiquetaEnvioResponse::setGetEtiquetaEnvioResult()
     */
    public function __construct(?EtiquetaEnvioResponse $getEtiquetaEnvioResult = null)
    {
        $this
            ->setGetEtiquetaEnvioResult($getEtiquetaEnvioResult);
    }

    /**
     * Get GetEtiquetaEnvioResult value
     */
    public function getGetEtiquetaEnvioResult(): ?EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioResult;
    }

    /**
     * Set GetEtiquetaEnvioResult value
     *
     * @return \StructType\GetEtiquetaEnvioResponse
     */
    public function setGetEtiquetaEnvioResult(?EtiquetaEnvioResponse $getEtiquetaEnvioResult = null): self
    {
        $this->GetEtiquetaEnvioResult = $getEtiquetaEnvioResult;

        return $this;
    }
}
