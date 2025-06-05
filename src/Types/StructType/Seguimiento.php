<?php

namespace Kavinsky\MRW\Types\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[\AllowDynamicProperties]
class Seguimiento extends AbstractStructBase
{
    protected ?int $Intentos = null;

    protected ?string $Publicado = null;

    protected ?int $CantidadBultos = null;

    protected ?string $Estado = null;

    protected ?string $EstadoDescripcion = null;

    protected ?string $FechaEntrega = null;

    protected ?string $HoraEntrega = null;

    protected ?string $NumAlbaran = null;

    protected ?string $PersonaEntrega = null;

    protected ?string $Referencia = null;

    protected ?string $DireccionTextualEntrega = null;

    protected ?string $Observaciones1 = null;

    protected ?string $Observaciones2 = null;

    protected ?string $ReferenciaClienteEntrega = null;

    public function __construct(
        ?int $intentos = null,
        ?string $publicado = null,
        ?int $cantidadBultos = null,
        ?string $estado = null,
        ?string $estadoDescripcion = null,
        ?string $fechaEntrega = null,
        ?string $horaEntrega = null,
        ?string $numAlbaran = null,
        ?string $personaEntrega = null,
        ?string $referencia = null,
        ?string $direccionTextualEntrega = null,
        ?string $observaciones1 = null,
        ?string $observaciones2 = null,
        ?string $referenciaClienteEntrega = null
    ) {
        $this
            ->setIntentos($intentos)
            ->setPublicado($publicado)
            ->setCantidadBultos($cantidadBultos)
            ->setEstado($estado)
            ->setEstadoDescripcion($estadoDescripcion)
            ->setFechaEntrega($fechaEntrega)
            ->setHoraEntrega($horaEntrega)
            ->setNumAlbaran($numAlbaran)
            ->setPersonaEntrega($personaEntrega)
            ->setReferencia($referencia)
            ->setDireccionTextualEntrega($direccionTextualEntrega)
            ->setObservaciones1($observaciones1)
            ->setObservaciones2($observaciones2)
            ->setReferenciaClienteEntrega($referenciaClienteEntrega);
    }

    public function getIntentos(): ?int
    {
        return $this->Intentos;
    }

    public function setIntentos(?int $intentos = null): self
    {
        if (! is_null($intentos) && ! (is_int($intentos) || ctype_digit($intentos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer, %s given', var_export($intentos, true), gettype($intentos)), __LINE__);
        }
        $this->Intentos = $intentos;

        return $this;
    }

    public function getPublicado(): ?string
    {
        return $this->Publicado;
    }

    public function setPublicado(?string $publicado = null): self
    {
        if (! is_null($publicado) && ! is_string($publicado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publicado, true), gettype($publicado)), __LINE__);
        }
        $this->Publicado = $publicado;

        return $this;
    }

    public function getCantidadBultos(): ?int
    {
        return $this->CantidadBultos;
    }

    public function setCantidadBultos(?int $cantidadBultos = null): self
    {
        if (! is_null($cantidadBultos) && ! (is_int($cantidadBultos) || ctype_digit($cantidadBultos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer, %s given', var_export($cantidadBultos, true), gettype($cantidadBultos)), __LINE__);
        }
        $this->CantidadBultos = $cantidadBultos;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->Estado ?? null;
    }

    public function setEstado(?string $estado = null): self
    {
        if (! is_null($estado) && ! is_string($estado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estado, true), gettype($estado)), __LINE__);
        }
        if (is_null($estado) || (is_array($estado) && empty($estado))) {
            unset($this->Estado);
        } else {
            $this->Estado = $estado;
        }

        return $this;
    }

    public function getEstadoDescripcion(): ?string
    {
        return $this->EstadoDescripcion ?? null;
    }

    public function setEstadoDescripcion(?string $estadoDescripcion = null): self
    {
        if (! is_null($estadoDescripcion) && ! is_string($estadoDescripcion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estadoDescripcion, true), gettype($estadoDescripcion)), __LINE__);
        }
        if (is_null($estadoDescripcion) || (is_array($estadoDescripcion) && empty($estadoDescripcion))) {
            unset($this->EstadoDescripcion);
        } else {
            $this->EstadoDescripcion = $estadoDescripcion;
        }

        return $this;
    }

    public function getFechaEntrega(): ?string
    {
        return $this->FechaEntrega ?? null;
    }

    public function setFechaEntrega(?string $fechaEntrega = null): self
    {
        if (! is_null($fechaEntrega) && ! is_string($fechaEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEntrega, true), gettype($fechaEntrega)), __LINE__);
        }
        if (is_null($fechaEntrega) || (is_array($fechaEntrega) && empty($fechaEntrega))) {
            unset($this->FechaEntrega);
        } else {
            $this->FechaEntrega = $fechaEntrega;
        }

        return $this;
    }

    public function getHoraEntrega(): ?string
    {
        return $this->HoraEntrega ?? null;
    }

    public function setHoraEntrega(?string $horaEntrega = null): self
    {
        if (! is_null($horaEntrega) && ! is_string($horaEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horaEntrega, true), gettype($horaEntrega)), __LINE__);
        }
        if (is_null($horaEntrega) || (is_array($horaEntrega) && empty($horaEntrega))) {
            unset($this->HoraEntrega);
        } else {
            $this->HoraEntrega = $horaEntrega;
        }

        return $this;
    }

    public function getNumAlbaran(): ?string
    {
        return $this->NumAlbaran ?? null;
    }

    public function setNumAlbaran(?string $numAlbaran = null): self
    {
        if (! is_null($numAlbaran) && ! is_string($numAlbaran)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numAlbaran, true), gettype($numAlbaran)), __LINE__);
        }
        if (is_null($numAlbaran) || (is_array($numAlbaran) && empty($numAlbaran))) {
            unset($this->NumAlbaran);
        } else {
            $this->NumAlbaran = $numAlbaran;
        }

        return $this;
    }

    public function getPersonaEntrega(): ?string
    {
        return $this->PersonaEntrega ?? null;
    }

    public function setPersonaEntrega(?string $personaEntrega = null): self
    {
        if (! is_null($personaEntrega) && ! is_string($personaEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaEntrega, true), gettype($personaEntrega)), __LINE__);
        }
        if (is_null($personaEntrega) || (is_array($personaEntrega) && empty($personaEntrega))) {
            unset($this->PersonaEntrega);
        } else {
            $this->PersonaEntrega = $personaEntrega;
        }

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->Referencia ?? null;
    }

    public function setReferencia(?string $referencia = null): self
    {
        if (! is_null($referencia) && ! is_string($referencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        if (is_null($referencia) || (is_array($referencia) && empty($referencia))) {
            unset($this->Referencia);
        } else {
            $this->Referencia = $referencia;
        }

        return $this;
    }

    public function getDireccionTextualEntrega(): ?string
    {
        return $this->DireccionTextualEntrega ?? null;
    }

    public function setDireccionTextualEntrega(?string $direccionTextualEntrega = null): self
    {
        if (! is_null($direccionTextualEntrega) && ! is_string($direccionTextualEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccionTextualEntrega, true), gettype($direccionTextualEntrega)), __LINE__);
        }
        if (is_null($direccionTextualEntrega) || (is_array($direccionTextualEntrega) && empty($direccionTextualEntrega))) {
            unset($this->DireccionTextualEntrega);
        } else {
            $this->DireccionTextualEntrega = $direccionTextualEntrega;
        }

        return $this;
    }

    public function getObservaciones1(): ?string
    {
        return $this->Observaciones1 ?? null;
    }

    public function setObservaciones1(?string $observaciones1 = null): self
    {
        if (! is_null($observaciones1) && ! is_string($observaciones1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones1, true), gettype($observaciones1)), __LINE__);
        }
        if (is_null($observaciones1) || (is_array($observaciones1) && empty($observaciones1))) {
            unset($this->Observaciones1);
        } else {
            $this->Observaciones1 = $observaciones1;
        }

        return $this;
    }

    public function getObservaciones2(): ?string
    {
        return $this->Observaciones2 ?? null;
    }

    public function setObservaciones2(?string $observaciones2 = null): self
    {
        if (! is_null($observaciones2) && ! is_string($observaciones2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones2, true), gettype($observaciones2)), __LINE__);
        }
        if (is_null($observaciones2) || (is_array($observaciones2) && empty($observaciones2))) {
            unset($this->Observaciones2);
        } else {
            $this->Observaciones2 = $observaciones2;
        }

        return $this;
    }

    public function getReferenciaClienteEntrega(): ?string
    {
        return $this->ReferenciaClienteEntrega ?? null;
    }

    public function setReferenciaClienteEntrega(?string $referenciaClienteEntrega = null): self
    {
        if (! is_null($referenciaClienteEntrega) && ! is_string($referenciaClienteEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaClienteEntrega, true), gettype($referenciaClienteEntrega)), __LINE__);
        }
        if (is_null($referenciaClienteEntrega) || (is_array($referenciaClienteEntrega) && empty($referenciaClienteEntrega))) {
            unset($this->ReferenciaClienteEntrega);
        } else {
            $this->ReferenciaClienteEntrega = $referenciaClienteEntrega;
        }

        return $this;
    }
}
