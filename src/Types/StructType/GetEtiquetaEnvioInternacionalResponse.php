<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class GetEtiquetaEnvioInternacionalResponse extends AbstractStructBase
{
    protected ?EtiquetaEnvioResponse $GetEtiquetaEnvioInternacionalResult = null;

    public function __construct(?EtiquetaEnvioResponse $getEtiquetaEnvioInternacionalResult = null)
    {
        $this
            ->setGetEtiquetaEnvioInternacionalResult($getEtiquetaEnvioInternacionalResult);
    }

    public function getGetEtiquetaEnvioInternacionalResult(): ?EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioInternacionalResult;
    }

    public function setGetEtiquetaEnvioInternacionalResult(?EtiquetaEnvioResponse $getEtiquetaEnvioInternacionalResult = null): self
    {
        $this->GetEtiquetaEnvioInternacionalResult = $getEtiquetaEnvioInternacionalResult;

        return $this;
    }
}
