<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class TransmEnvio extends AbstractStructBase
{
    protected ?TransmEnvioRequest $request = null;

    public function __construct(?TransmEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    public function getRequest(): ?TransmEnvioRequest
    {
        return $this->request;
    }

    public function setRequest(?TransmEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
