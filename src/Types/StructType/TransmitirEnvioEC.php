<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class TransmitirEnvioEC extends AbstractStructBase
{
    protected ?TransmitirEnvioECRequest $request = null;

    public function __construct(?TransmitirEnvioECRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    public function getRequest(): ?TransmitirEnvioECRequest
    {
        return $this->request;
    }

    public function setRequest(?TransmitirEnvioECRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
