<?php

namespace Kavinsky\MRW\Type;

class HorarioRequest
{
    /**
     * @var null | \Kavinsky\MRW\Type\ArrayOfHorarioRangoRequest
     */
    private ?\Kavinsky\MRW\Type\ArrayOfHorarioRangoRequest $Rangos = null;

    public function getRangos() : ?\Kavinsky\MRW\Type\ArrayOfHorarioRangoRequest
    {
        return $this->Rangos;
    }

    public function withRangos(?\Kavinsky\MRW\Type\ArrayOfHorarioRangoRequest $Rangos) : static
    {
        $new = clone $this;
        $new->Rangos = $Rangos;

        return $new;
    }
}

