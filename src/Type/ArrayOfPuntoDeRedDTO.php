<?php

namespace Kavinsky\MRW\Type;

class ArrayOfPuntoDeRedDTO
{
    /**
     * @var null | array<int<0,max>, \Kavinsky\MRW\Type\PuntoDeRedDTO>
     */
    private ?array $PuntoDeRedDTO = null;

    public function getPuntoDeRedDTO() : ?array
    {
        return $this->PuntoDeRedDTO;
    }

    public function withPuntoDeRedDTO(?array $PuntoDeRedDTO) : static
    {
        $new = clone $this;
        $new->PuntoDeRedDTO = $PuntoDeRedDTO;

        return $new;
    }
}

