<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class SeguroOpcionalRequest extends AbstractStructBase
{
    protected ?string $CodigoNaturaleza = null;

    protected ?string $CantidadBoletos = null;

    protected ?string $ValorAsegurado = null;

    public function __construct(?string $codigoNaturaleza = null, ?string $cantidadBoletos = null, ?string $valorAsegurado = null)
    {
        $this
            ->setCodigoNaturaleza($codigoNaturaleza)
            ->setCantidadBoletos($cantidadBoletos)
            ->setValorAsegurado($valorAsegurado);
    }

    public function getCodigoNaturaleza(): ?string
    {
        return $this->CodigoNaturaleza;
    }

    public function setCodigoNaturaleza(?string $codigoNaturaleza = null): self
    {
        // validation for constraint: string
        $this->CodigoNaturaleza = $codigoNaturaleza;

        return $this;
    }

    public function getCantidadBoletos(): ?string
    {
        return $this->CantidadBoletos;
    }

    public function setCantidadBoletos(?string $cantidadBoletos = null): self
    {
        // validation for constraint: string
        $this->CantidadBoletos = $cantidadBoletos;

        return $this;
    }

    public function getValorAsegurado(): ?string
    {
        return $this->ValorAsegurado;
    }

    public function setValorAsegurado(?string $valorAsegurado = null): self
    {
        // validation for constraint: string
        $this->ValorAsegurado = $valorAsegurado;

        return $this;
    }
}
