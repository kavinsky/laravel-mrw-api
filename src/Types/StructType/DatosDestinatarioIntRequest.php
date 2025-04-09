<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class DatosDestinatarioIntRequest extends AbstractStructBase
{
    protected ?DireccionIntRequest $Direccion = null;

    protected ?string $Nif = null;

    protected ?string $Nombre = null;

    protected ?string $Telefono = null;

    protected ?string $ALaAtencionDe = null;

    public function __construct(?DireccionIntRequest $direccion = null, ?string $nif = null, ?string $nombre = null, ?string $telefono = null, ?string $aLaAtencionDe = null)
    {
        $this
            ->setDireccion($direccion)
            ->setNif($nif)
            ->setNombre($nombre)
            ->setTelefono($telefono)
            ->setALaAtencionDe($aLaAtencionDe);
    }

    public function getDireccion(): ?DireccionIntRequest
    {
        return $this->Direccion;
    }

    public function setDireccion(?DireccionIntRequest $direccion = null): self
    {
        $this->Direccion = $direccion;

        return $this;
    }

    public function getNif(): ?string
    {
        return $this->Nif;
    }

    public function setNif(?string $nif = null): self
    {
        // validation for constraint: string
        $this->Nif = $nif;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(?string $nombre = null): self
    {
        // validation for constraint: string
        $this->Nombre = $nombre;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function setTelefono(?string $telefono = null): self
    {
        // validation for constraint: string
        $this->Telefono = $telefono;

        return $this;
    }

    public function getALaAtencionDe(): ?string
    {
        return $this->ALaAtencionDe;
    }

    public function setALaAtencionDe(?string $aLaAtencionDe = null): self
    {
        // validation for constraint: string
        $this->ALaAtencionDe = $aLaAtencionDe;

        return $this;
    }
}
