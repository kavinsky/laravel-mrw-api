<?php

namespace Kavinsky\MRW\Type;

class ArrayOfHorarioRangoRequest
{
    /**
     * @var null | array<int<0,max>, \Kavinsky\MRW\Type\HorarioRangoRequest>
     */
    private ?array $HorarioRangoRequest = null;

    public function getHorarioRangoRequest() : ?array
    {
        return $this->HorarioRangoRequest;
    }

    public function withHorarioRangoRequest(?array $HorarioRangoRequest) : static
    {
        $new = clone $this;
        $new->HorarioRangoRequest = $HorarioRangoRequest;

        return $new;
    }
}

