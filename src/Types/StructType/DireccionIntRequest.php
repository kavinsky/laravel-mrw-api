<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class DireccionIntRequest extends AbstractStructBase
{
    protected ?string $Direccion = null;

    protected ?string $CodigoPostal = null;

    protected ?string $Poblacion = null;

    protected ?string $Estado = null;

    protected ?string $CodigoPais = null;

    public function __construct(?string $direccion = null, ?string $codigoPostal = null, ?string $poblacion = null, ?string $estado = null, ?string $codigoPais = null)
    {
        $this
            ->setDireccion($direccion)
            ->setCodigoPostal($codigoPostal)
            ->setPoblacion($poblacion)
            ->setEstado($estado)
            ->setCodigoPais($codigoPais);
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function setDireccion(?string $direccion = null): self
    {
        // validation for constraint: string
        $this->Direccion = $direccion;

        return $this;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    public function setCodigoPostal(?string $codigoPostal = null): self
    {
        // validation for constraint: string
        $this->CodigoPostal = $codigoPostal;

        return $this;
    }

    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    public function setPoblacion(?string $poblacion = null): self
    {
        // validation for constraint: string
        $this->Poblacion = $poblacion;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function setEstado(?string $estado = null): self
    {
        // validation for constraint: string
        $this->Estado = $estado;

        return $this;
    }

    public function getCodigoPais(): ?string
    {
        return $this->CodigoPais;
    }

    public function setCodigoPais(?string $codigoPais = null): self
    {
        // validation for constraint: string
        $this->CodigoPais = $codigoPais;

        return $this;
    }
}
