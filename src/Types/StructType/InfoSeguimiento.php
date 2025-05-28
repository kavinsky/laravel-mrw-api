<?php

namespace Kavinsky\MRW\Types\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[\AllowDynamicProperties]
class InfoSeguimiento extends AbstractStructBase
{
    protected ?string $MensajeSeguimiento = null;
    protected ?\Kavinsky\MRW\Types\ArrayType\ArrayOfAbonado $Seguimiento = null;

    public function __construct(?string $mensajeSeguimiento = null, ?\Kavinsky\MRW\Types\ArrayType\ArrayOfAbonado $seguimiento = null)
    {
        $this
            ->setMensajeSeguimiento($mensajeSeguimiento)
            ->setSeguimiento($seguimiento);
    }

    public function getMensajeSeguimiento(): ?string
    {
        return $this->MensajeSeguimiento ?? null;
    }

    public function setMensajeSeguimiento(?string $mensajeSeguimiento = null): self
    {
        if (!is_null($mensajeSeguimiento) && !is_string($mensajeSeguimiento)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mensajeSeguimiento, true), gettype($mensajeSeguimiento)), __LINE__);
        }
        if (is_null($mensajeSeguimiento) || (is_array($mensajeSeguimiento) && empty($mensajeSeguimiento))) {
            unset($this->MensajeSeguimiento);
        } else {
            $this->MensajeSeguimiento = $mensajeSeguimiento;
        }

        return $this;
    }

    public function getSeguimiento(): ?\Kavinsky\MRW\Types\ArrayType\ArrayOfAbonado
    {
        return $this->Seguimiento ?? null;
    }

    public function setSeguimiento(?\Kavinsky\MRW\Types\ArrayType\ArrayOfAbonado $seguimiento = null): self
    {
        if (is_null($seguimiento) || (is_array($seguimiento) && empty($seguimiento))) {
            unset($this->Seguimiento);
        } else {
            $this->Seguimiento = $seguimiento;
        }

        return $this;
    }
}
