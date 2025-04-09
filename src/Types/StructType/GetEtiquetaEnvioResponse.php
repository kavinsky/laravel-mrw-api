<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class GetEtiquetaEnvioResponse extends AbstractStructBase
{
    protected ?EtiquetaEnvioResponse $GetEtiquetaEnvioResult = null;

    public function __construct(?EtiquetaEnvioResponse $getEtiquetaEnvioResult = null)
    {
        $this
            ->setGetEtiquetaEnvioResult($getEtiquetaEnvioResult);
    }

    public function getGetEtiquetaEnvioResult(): ?EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioResult;
    }

    public function setGetEtiquetaEnvioResult(?EtiquetaEnvioResponse $getEtiquetaEnvioResult = null): self
    {
        $this->GetEtiquetaEnvioResult = $getEtiquetaEnvioResult;

        return $this;
    }
}
