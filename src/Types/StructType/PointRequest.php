<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class PointRequest extends AbstractStructBase
{
    protected ?string $codigoPoint = null;

    public function __construct(?string $codigoPoint = null)
    {
        $this
            ->setCodigoPoint($codigoPoint);
    }

    public function getCodigoPoint(): ?string
    {
        return $this->codigoPoint;
    }

    public function setCodigoPoint(?string $codigoPoint = null): self
    {
        // validation for constraint: string
        $this->codigoPoint = $codigoPoint;

        return $this;
    }
}
