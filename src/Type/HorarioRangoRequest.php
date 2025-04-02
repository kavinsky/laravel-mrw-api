<?php

namespace Kavinsky\MRW\Type;

class HorarioRangoRequest
{
    private ?string $Desde = null;

    private ?string $Hasta = null;

    public function getDesde(): ?string
    {
        return $this->Desde;
    }

    public function withDesde(?string $Desde): static
    {
        $new = clone $this;
        $new->Desde = $Desde;

        return $new;
    }

    public function getHasta(): ?string
    {
        return $this->Hasta;
    }

    public function withHasta(?string $Hasta): static
    {
        $new = clone $this;
        $new->Hasta = $Hasta;

        return $new;
    }
}
