<?php

namespace Kavinsky\MRW\Type;

class ArrayOfPuntoDeRedDTO
{
    /**
     * @var null|array<int<0, max>, PuntoDeRedDTO>
     */
    private ?array $PuntoDeRedDTO = null;

    /**
     * @return \Kavinsky\MRW\Type\PuntoDeRedDTO[]|null
     */
    public function getPuntoDeRedDTO(): ?array
    {
        return $this->PuntoDeRedDTO;
    }

    /**
     * @param PuntoDeRedDTO[]|null $PuntoDeRedDTO
     *
     * @return $this
     */
    public function withPuntoDeRedDTO(?array $PuntoDeRedDTO): static
    {
        $new = clone $this;
        $new->PuntoDeRedDTO = $PuntoDeRedDTO;

        return $new;
    }
}
