<?php

namespace Kavinsky\MRW\Type;

class ArrayOfHorarioRangoRequest
{
    /**
     * @var null|array<int<0, max>, HorarioRangoRequest>
     */
    private ?array $HorarioRangoRequest = null;

    /**
     * @return \Kavinsky\MRW\Type\HorarioRangoRequest[]|null
     */
    public function getHorarioRangoRequest(): ?array
    {
        return $this->HorarioRangoRequest;
    }

    /**
     * @param  null|array<int<0, max>, HorarioRangoRequest>  $HorarioRangoRequest
     * @return $this
     */
    public function withHorarioRangoRequest(?array $HorarioRangoRequest): static
    {
        $new = clone $this;
        $new->HorarioRangoRequest = $HorarioRangoRequest;

        return $new;
    }
}
