<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class TransmEnvioECResponse extends AbstractStructBase
{
    protected ?TransEnvioECResponse $TransmEnvioECResult = null;

    public function __construct(?TransEnvioECResponse $transmEnvioECResult = null)
    {
        $this
            ->setTransmEnvioECResult($transmEnvioECResult);
    }

    public function getTransmEnvioECResult(): ?TransEnvioECResponse
    {
        return $this->TransmEnvioECResult;
    }

    public function setTransmEnvioECResult(?TransEnvioECResponse $transmEnvioECResult = null): self
    {
        $this->TransmEnvioECResult = $transmEnvioECResult;

        return $this;
    }
}
