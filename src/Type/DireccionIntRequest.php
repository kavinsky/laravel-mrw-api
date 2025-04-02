<?php

namespace Kavinsky\MRW\Type;

class DireccionIntRequest
{
    private ?string $Direccion = null;

    private ?string $CodigoPostal = null;

    private ?string $Poblacion = null;

    private ?string $Estado = null;

    private ?string $CodigoPais = null;

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function withDireccion(?string $Direccion): static
    {
        $new = clone $this;
        $new->Direccion = $Direccion;

        return $new;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    public function withCodigoPostal(?string $CodigoPostal): static
    {
        $new = clone $this;
        $new->CodigoPostal = $CodigoPostal;

        return $new;
    }

    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    public function withPoblacion(?string $Poblacion): static
    {
        $new = clone $this;
        $new->Poblacion = $Poblacion;

        return $new;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function withEstado(?string $Estado): static
    {
        $new = clone $this;
        $new->Estado = $Estado;

        return $new;
    }

    public function getCodigoPais(): ?string
    {
        return $this->CodigoPais;
    }

    public function withCodigoPais(?string $CodigoPais): static
    {
        $new = clone $this;
        $new->CodigoPais = $CodigoPais;

        return $new;
    }
}
