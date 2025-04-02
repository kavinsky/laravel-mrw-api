<?php

namespace Kavinsky\MRW\Type;

class BultoIntRequest
{
    private ?string $Alto = null;

    private ?string $Largo = null;

    private ?string $Ancho = null;

    private ?string $Dimension = null;

    public function getAlto(): ?string
    {
        return $this->Alto;
    }

    public function withAlto(?string $Alto): static
    {
        $new = clone $this;
        $new->Alto = $Alto;

        return $new;
    }

    public function getLargo(): ?string
    {
        return $this->Largo;
    }

    public function withLargo(?string $Largo): static
    {
        $new = clone $this;
        $new->Largo = $Largo;

        return $new;
    }

    public function getAncho(): ?string
    {
        return $this->Ancho;
    }

    public function withAncho(?string $Ancho): static
    {
        $new = clone $this;
        $new->Ancho = $Ancho;

        return $new;
    }

    public function getDimension(): ?string
    {
        return $this->Dimension;
    }

    public function withDimension(?string $Dimension): static
    {
        $new = clone $this;
        $new->Dimension = $Dimension;

        return $new;
    }
}
