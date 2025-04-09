<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEtiquetaEnvioInternacionalResponse StructType
 */
#[AllowDynamicProperties]
class GetEtiquetaEnvioInternacionalResponse extends AbstractStructBase
{
    /**
     * The GetEtiquetaEnvioInternacionalResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?EtiquetaEnvioResponse $GetEtiquetaEnvioInternacionalResult = null;

    /**
     * Constructor method for GetEtiquetaEnvioInternacionalResponse
     *
     * @uses GetEtiquetaEnvioInternacionalResponse::setGetEtiquetaEnvioInternacionalResult()
     */
    public function __construct(?EtiquetaEnvioResponse $getEtiquetaEnvioInternacionalResult = null)
    {
        $this
            ->setGetEtiquetaEnvioInternacionalResult($getEtiquetaEnvioInternacionalResult);
    }

    /**
     * Get GetEtiquetaEnvioInternacionalResult value
     */
    public function getGetEtiquetaEnvioInternacionalResult(): ?EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioInternacionalResult;
    }

    /**
     * Set GetEtiquetaEnvioInternacionalResult value
     *
     * @return \StructType\GetEtiquetaEnvioInternacionalResponse
     */
    public function setGetEtiquetaEnvioInternacionalResult(?EtiquetaEnvioResponse $getEtiquetaEnvioInternacionalResult = null): self
    {
        $this->GetEtiquetaEnvioInternacionalResult = $getEtiquetaEnvioInternacionalResult;

        return $this;
    }
}
