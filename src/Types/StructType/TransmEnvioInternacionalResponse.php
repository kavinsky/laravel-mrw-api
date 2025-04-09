<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class TransmEnvioInternacionalResponse extends AbstractStructBase
{
    protected ?TransmEnvioResponse $TransmEnvioInternacionalResult = null;

    public function __construct(?TransmEnvioResponse $transmEnvioInternacionalResult = null)
    {
        $this
            ->setTransmEnvioInternacionalResult($transmEnvioInternacionalResult);
    }

    public function getTransmEnvioInternacionalResult(): ?TransmEnvioResponse
    {
        return $this->TransmEnvioInternacionalResult;
    }

    public function setTransmEnvioInternacionalResult(?TransmEnvioResponse $transmEnvioInternacionalResult = null): self
    {
        $this->TransmEnvioInternacionalResult = $transmEnvioInternacionalResult;

        return $this;
    }
}
