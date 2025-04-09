<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class GetEtiquetaEnvio extends AbstractStructBase
{
    protected ?EtiquetaEnvioRequest $request = null;

    public function __construct(?EtiquetaEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    public function getRequest(): ?EtiquetaEnvioRequest
    {
        return $this->request;
    }

    public function setRequest(?EtiquetaEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
