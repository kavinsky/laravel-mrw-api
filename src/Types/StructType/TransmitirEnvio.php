<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class TransmitirEnvio extends AbstractStructBase
{
    protected ?TransmitirEnvioRequest $request = null;

    public function __construct(?TransmitirEnvioRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    public function getRequest(): ?TransmitirEnvioRequest
    {
        return $this->request;
    }

    public function setRequest(?TransmitirEnvioRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
