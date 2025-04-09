<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class DatosDestinatarioRequest extends AbstractStructBase
{
    protected ?DireccionRequest $Direccion = null;

    protected ?string $Nif = null;

    protected ?string $Nombre = null;

    protected ?string $Telefono = null;

    protected ?string $Contacto = null;

    protected ?string $ALaAtencionDe = null;

    protected ?HorarioRequest $Horario = null;

    protected ?string $Observaciones = null;

    public function __construct(?DireccionRequest $direccion = null, ?string $nif = null, ?string $nombre = null, ?string $telefono = null, ?string $contacto = null, ?string $aLaAtencionDe = null, ?HorarioRequest $horario = null, ?string $observaciones = null)
    {
        $this
            ->setDireccion($direccion)
            ->setNif($nif)
            ->setNombre($nombre)
            ->setTelefono($telefono)
            ->setContacto($contacto)
            ->setALaAtencionDe($aLaAtencionDe)
            ->setHorario($horario)
            ->setObservaciones($observaciones);
    }

    public function getDireccion(): ?DireccionRequest
    {
        return $this->Direccion;
    }

    public function setDireccion(?DireccionRequest $direccion = null): self
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

    public function getContacto(): ?string
    {
        return $this->Contacto;
    }

    public function setContacto(?string $contacto = null): self
    {
        // validation for constraint: string
        $this->Contacto = $contacto;

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

    public function getHorario(): ?HorarioRequest
    {
        return $this->Horario;
    }

    public function setHorario(?HorarioRequest $horario = null): self
    {
        $this->Horario = $horario;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->Observaciones;
    }

    public function setObservaciones(?string $observaciones = null): self
    {
        // validation for constraint: string
        $this->Observaciones = $observaciones;

        return $this;
    }
}
