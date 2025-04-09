<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
abstract class BaseResponse extends AbstractStructBase
{
    protected ?string $Estado = null;

    protected ?string $Mensaje = null;

    public function __construct(?string $estado = null, ?string $mensaje = null)
    {
        $this
            ->setEstado($estado)
            ->setMensaje($mensaje);
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

    public function getMensaje(): ?string
    {
        return $this->Mensaje;
    }

    public function setMensaje(?string $mensaje = null): self
    {
        // validation for constraint: string
        $this->Mensaje = $mensaje;

        return $this;
    }
}
