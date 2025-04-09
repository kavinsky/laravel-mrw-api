<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class HorarioRangoRequest extends AbstractStructBase
{
    protected ?string $Desde = null;

    protected ?string $Hasta = null;

    public function __construct(?string $desde = null, ?string $hasta = null)
    {
        $this
            ->setDesde($desde)
            ->setHasta($hasta);
    }

    public function getDesde(): ?string
    {
        return $this->Desde;
    }

    public function setDesde(?string $desde = null): self
    {
        // validation for constraint: string
        $this->Desde = $desde;

        return $this;
    }

    public function getHasta(): ?string
    {
        return $this->Hasta;
    }

    public function setHasta(?string $hasta = null): self
    {
        // validation for constraint: string
        $this->Hasta = $hasta;

        return $this;
    }
}
