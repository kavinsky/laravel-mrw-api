<?php

namespace Kavinsky\MRW\Type;

class SeguroOpcionalRequest
{
    private ?string $CodigoNaturaleza = null;

    private ?string $CantidadBoletos = null;

    private ?string $ValorAsegurado = null;

    public function getCodigoNaturaleza(): ?string
    {
        return $this->CodigoNaturaleza;
    }

    public function withCodigoNaturaleza(?string $CodigoNaturaleza): static
    {
        $new = clone $this;
        $new->CodigoNaturaleza = $CodigoNaturaleza;

        return $new;
    }

    public function getCantidadBoletos(): ?string
    {
        return $this->CantidadBoletos;
    }

    public function withCantidadBoletos(?string $CantidadBoletos): static
    {
        $new = clone $this;
        $new->CantidadBoletos = $CantidadBoletos;

        return $new;
    }

    public function getValorAsegurado(): ?string
    {
        return $this->ValorAsegurado;
    }

    public function withValorAsegurado(?string $ValorAsegurado): static
    {
        $new = clone $this;
        $new->ValorAsegurado = $ValorAsegurado;

        return $new;
    }
}
