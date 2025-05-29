<?php

namespace Kavinsky\MRW\Types\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[\AllowDynamicProperties]
class Cliente extends AbstractStructBase
{
    protected ?string $Aplicacion = null;

    protected ?string $CodigoAbonado = null;

    protected ?string $Franquicia = null;

    protected ?string $NombreAbonado = null;

    protected ?string $DepartamentoCodigo = null;

    protected ?string $DepartamentoNombre = null;

    public function __construct(?string $aplicacion = null, ?string $codigoAbonado = null, ?string $franquicia = null, ?string $nombreAbonado = null, ?string $departamentoCodigo = null, ?string $departamentoNombre = null)
    {
        $this
            ->setAplicacion($aplicacion)
            ->setCodigoAbonado($codigoAbonado)
            ->setFranquicia($franquicia)
            ->setNombreAbonado($nombreAbonado)
            ->setDepartamentoCodigo($departamentoCodigo)
            ->setDepartamentoNombre($departamentoNombre);
    }

    public function getAplicacion(): ?string
    {
        return $this->Aplicacion ?? null;
    }

    public function setAplicacion(?string $aplicacion = null): self
    {
        if (! is_null($aplicacion) && ! is_string($aplicacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aplicacion, true), gettype($aplicacion)), __LINE__);
        }

        if (is_null($aplicacion) || (is_array($aplicacion) && empty($aplicacion))) {
            unset($this->Aplicacion);
        } else {
            $this->Aplicacion = $aplicacion;
        }

        return $this;
    }

    public function getCodigoAbonado(): ?string
    {
        return $this->CodigoAbonado ?? null;
    }

    public function setCodigoAbonado(?string $codigoAbonado = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoAbonado) && ! is_string($codigoAbonado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoAbonado, true), gettype($codigoAbonado)), __LINE__);
        }
        if (is_null($codigoAbonado) || (is_array($codigoAbonado) && empty($codigoAbonado))) {
            unset($this->CodigoAbonado);
        } else {
            $this->CodigoAbonado = $codigoAbonado;
        }

        return $this;
    }

    public function getFranquicia(): ?string
    {
        return $this->Franquicia ?? null;
    }

    public function setFranquicia(?string $franquicia = null): self
    {
        // validation for constraint: string
        if (! is_null($franquicia) && ! is_string($franquicia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($franquicia, true), gettype($franquicia)), __LINE__);
        }
        if (is_null($franquicia) || (is_array($franquicia) && empty($franquicia))) {
            unset($this->Franquicia);
        } else {
            $this->Franquicia = $franquicia;
        }

        return $this;
    }

    public function getNombreAbonado(): ?string
    {
        return $this->NombreAbonado ?? null;
    }

    public function setNombreAbonado(?string $nombreAbonado = null): self
    {
        if (! is_null($nombreAbonado) && ! is_string($nombreAbonado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreAbonado, true), gettype($nombreAbonado)), __LINE__);
        }

        if (is_null($nombreAbonado) || (is_array($nombreAbonado) && empty($nombreAbonado))) {
            unset($this->NombreAbonado);
        } else {
            $this->NombreAbonado = $nombreAbonado;
        }

        return $this;
    }

    public function getDepartamentoCodigo(): ?string
    {
        return $this->DepartamentoCodigo ?? null;
    }

    public function setDepartamentoCodigo(?string $departamentoCodigo = null): self
    {
        // validation for constraint: string
        if (! is_null($departamentoCodigo) && ! is_string($departamentoCodigo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departamentoCodigo, true), gettype($departamentoCodigo)), __LINE__);
        }
        if (is_null($departamentoCodigo) || (is_array($departamentoCodigo) && empty($departamentoCodigo))) {
            unset($this->DepartamentoCodigo);
        } else {
            $this->DepartamentoCodigo = $departamentoCodigo;
        }

        return $this;
    }

    public function getDepartamentoNombre(): ?string
    {
        return $this->DepartamentoNombre ?? null;
    }

    public function setDepartamentoNombre(?string $departamentoNombre = null): self
    {
        if (! is_null($departamentoNombre) && ! is_string($departamentoNombre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departamentoNombre, true), gettype($departamentoNombre)), __LINE__);
        }

        if (is_null($departamentoNombre) || (is_array($departamentoNombre) && empty($departamentoNombre))) {
            unset($this->DepartamentoNombre);
        } else {
            $this->DepartamentoNombre = $departamentoNombre;
        }

        return $this;
    }
}
