<?php

namespace Kavinsky\MRW\Type;

class HorarioRequest
{
    private ?ArrayOfHorarioRangoRequest $Rangos = null;

    public function getRangos(): ?ArrayOfHorarioRangoRequest
    {
        return $this->Rangos;
    }

    public function withRangos(?ArrayOfHorarioRangoRequest $Rangos): static
    {
        $new = clone $this;
        $new->Rangos = $Rangos;

        return $new;
    }
}
