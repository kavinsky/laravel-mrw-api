<?php

namespace Kavinsky\MRW\Type;

class DatosDestinatarioIntRequest
{
    private ?DireccionIntRequest $Direccion = null;

    private ?string $Nif = null;

    private ?string $Nombre = null;

    private ?string $Telefono = null;

    private ?string $ALaAtencionDe = null;

    public function getDireccion(): ?DireccionIntRequest
    {
        return $this->Direccion;
    }

    public function withDireccion(?DireccionIntRequest $Direccion): static
    {
        $new = clone $this;
        $new->Direccion = $Direccion;

        return $new;
    }

    public function getNif(): ?string
    {
        return $this->Nif;
    }

    public function withNif(?string $Nif): static
    {
        $new = clone $this;
        $new->Nif = $Nif;

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

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function withTelefono(?string $Telefono): static
    {
        $new = clone $this;
        $new->Telefono = $Telefono;

        return $new;
    }

    public function getALaAtencionDe(): ?string
    {
        return $this->ALaAtencionDe;
    }

    public function withALaAtencionDe(?string $ALaAtencionDe): static
    {
        $new = clone $this;
        $new->ALaAtencionDe = $ALaAtencionDe;

        return $new;
    }
}
