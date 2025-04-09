<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class PuntoDeRedDTO extends AbstractStructBase
{
    protected ?string $Codigo = null;

    protected ?string $Tipo = null;

    protected ?string $Nombre = null;

    protected ?CodigoPointDTO $CodigoPuntoVinculado = null;

    protected ?DireccionPuntoDTO $Direccion = null;

    public function __construct(?string $codigo = null, ?string $tipo = null, ?string $nombre = null, ?CodigoPointDTO $codigoPuntoVinculado = null, ?DireccionPuntoDTO $direccion = null)
    {
        $this
            ->setCodigo($codigo)
            ->setTipo($tipo)
            ->setNombre($nombre)
            ->setCodigoPuntoVinculado($codigoPuntoVinculado)
            ->setDireccion($direccion);
    }

    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    public function setCodigo(?string $codigo = null): self
    {
        // validation for constraint: string
        $this->Codigo = $codigo;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    public function setTipo(?string $tipo = null): self
    {
        // validation for constraint: string
        $this->Tipo = $tipo;

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

    public function getCodigoPuntoVinculado(): ?CodigoPointDTO
    {
        return $this->CodigoPuntoVinculado;
    }

    public function setCodigoPuntoVinculado(?CodigoPointDTO $codigoPuntoVinculado = null): self
    {
        $this->CodigoPuntoVinculado = $codigoPuntoVinculado;

        return $this;
    }

    public function getDireccion(): ?DireccionPuntoDTO
    {
        return $this->Direccion;
    }

    public function setDireccion(?DireccionPuntoDTO $direccion = null): self
    {
        $this->Direccion = $direccion;

        return $this;
    }
}
