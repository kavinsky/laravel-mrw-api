<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class CancelaEnvioRequest extends AbstractStructBase
{
    protected ?string $NumeroEnvioOriginal = null;

    public function __construct(?string $numeroEnvioOriginal = null)
    {
        $this
            ->setNumeroEnvioOriginal($numeroEnvioOriginal);
    }

    public function getNumeroEnvioOriginal(): ?string
    {
        return $this->NumeroEnvioOriginal;
    }

    public function setNumeroEnvioOriginal(?string $numeroEnvioOriginal = null): self
    {
        // validation for constraint: string
        $this->NumeroEnvioOriginal = $numeroEnvioOriginal;

        return $this;
    }
}
