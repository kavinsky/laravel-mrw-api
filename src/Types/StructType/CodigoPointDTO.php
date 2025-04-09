<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class CodigoPointDTO extends AbstractStructBase
{
    protected ?string $Codigo = null;

    protected ?string $Tipo = null;

    public function __construct(?string $codigo = null, ?string $tipo = null)
    {
        $this
            ->setCodigo($codigo)
            ->setTipo($tipo);
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
}
