<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class TransmEnvioInternacional extends AbstractStructBase
{
    protected ?TransmEnvioIntRequest $request = null;

    public function __construct(?TransmEnvioIntRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    public function getRequest(): ?TransmEnvioIntRequest
    {
        return $this->request;
    }

    public function setRequest(?TransmEnvioIntRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
