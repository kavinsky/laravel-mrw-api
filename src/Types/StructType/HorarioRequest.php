<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfHorarioRangoRequest;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class HorarioRequest extends AbstractStructBase
{
    protected ?ArrayOfHorarioRangoRequest $Rangos = null;

    public function __construct(?ArrayOfHorarioRangoRequest $rangos = null)
    {
        $this
            ->setRangos($rangos);
    }

    public function getRangos(): ?ArrayOfHorarioRangoRequest
    {
        return $this->Rangos;
    }

    public function setRangos(?ArrayOfHorarioRangoRequest $rangos = null): self
    {
        $this->Rangos = $rangos;

        return $this;
    }
}
