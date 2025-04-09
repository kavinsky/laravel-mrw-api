<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class BultoIntRequest extends AbstractStructBase
{
    protected ?string $Alto = null;

    protected ?string $Largo = null;

    protected ?string $Ancho = null;

    protected ?string $Dimension = null;

    public function __construct(?string $alto = null, ?string $largo = null, ?string $ancho = null, ?string $dimension = null)
    {
        $this
            ->setAlto($alto)
            ->setLargo($largo)
            ->setAncho($ancho)
            ->setDimension($dimension);
    }

    public function getAlto(): ?string
    {
        return $this->Alto;
    }

    public function setAlto(?string $alto = null): self
    {
        // validation for constraint: string
        $this->Alto = $alto;

        return $this;
    }

    public function getLargo(): ?string
    {
        return $this->Largo;
    }

    public function setLargo(?string $largo = null): self
    {
        // validation for constraint: string
        $this->Largo = $largo;

        return $this;
    }

    public function getAncho(): ?string
    {
        return $this->Ancho;
    }

    public function setAncho(?string $ancho = null): self
    {
        // validation for constraint: string
        $this->Ancho = $ancho;

        return $this;
    }

    public function getDimension(): ?string
    {
        return $this->Dimension;
    }

    public function setDimension(?string $dimension = null): self
    {
        // validation for constraint: string
        $this->Dimension = $dimension;

        return $this;
    }
}
