<?php

namespace Kavinsky\MRW\Type;

class BultoRequest
{
    private ?string $Alto = null;

    private ?string $Largo = null;

    private ?string $Ancho = null;

    private ?string $Dimension = null;

    private ?string $Referencia = null;

    private ?string $Peso = null;

    private ?string $NumeroBulto = null;

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

    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    public function withReferencia(?string $Referencia): static
    {
        $new = clone $this;
        $new->Referencia = $Referencia;

        return $new;
    }

    public function getPeso(): ?string
    {
        return $this->Peso;
    }

    public function withPeso(?string $Peso): static
    {
        $new = clone $this;
        $new->Peso = $Peso;

        return $new;
    }

    public function getNumeroBulto(): ?string
    {
        return $this->NumeroBulto;
    }

    public function withNumeroBulto(?string $NumeroBulto): static
    {
        $new = clone $this;
        $new->NumeroBulto = $NumeroBulto;

        return $new;
    }
}
