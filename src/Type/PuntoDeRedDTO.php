<?php

namespace Kavinsky\MRW\Type;

class PuntoDeRedDTO
{
    private ?string $Codigo = null;

    private ?string $Tipo = null;

    private ?string $Nombre = null;

    private ?CodigoPointDTO $CodigoPuntoVinculado = null;

    private ?DireccionPuntoDTO $Direccion = null;

    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    public function withCodigo(?string $Codigo): static
    {
        $new = clone $this;
        $new->Codigo = $Codigo;

        return $new;
    }

    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    public function withTipo(?string $Tipo): static
    {
        $new = clone $this;
        $new->Tipo = $Tipo;

        return $new;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function withNombre(?string $Nombre): static
    {
        $new = clone $this;
        $new->Nombre = $Nombre;

        return $new;
    }

    public function getCodigoPuntoVinculado(): ?CodigoPointDTO
    {
        return $this->CodigoPuntoVinculado;
    }

    public function withCodigoPuntoVinculado(?CodigoPointDTO $CodigoPuntoVinculado): static
    {
        $new = clone $this;
        $new->CodigoPuntoVinculado = $CodigoPuntoVinculado;

        return $new;
    }

    public function getDireccion(): ?DireccionPuntoDTO
    {
        return $this->Direccion;
    }

    public function withDireccion(?DireccionPuntoDTO $Direccion): static
    {
        $new = clone $this;
        $new->Direccion = $Direccion;

        return $new;
    }
}
