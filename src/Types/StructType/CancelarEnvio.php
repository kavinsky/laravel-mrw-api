<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class CancelarEnvio extends AbstractStructBase
{
    protected ?CancelarEnvioRequest $request = null;

    public function __construct(?CancelarEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    public function getRequest(): ?CancelarEnvioRequest
    {
        return $this->request;
    }

    public function setRequest(?CancelarEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
