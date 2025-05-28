<?php

namespace Kavinsky\MRW\Types\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

#[\AllowDynamicProperties]
class Abonado extends AbstractStructBase
{
    protected ?\Kavinsky\MRW\Types\StructType\Cliente $InformacionAbonado = null;

    protected ?\Kavinsky\MRW\Types\ArrayType\ArrayOfSeguimiento $SeguimientoAbonado = null;

    public function __construct(?\Kavinsky\MRW\Types\StructType\Cliente $informacionAbonado = null, ?\Kavinsky\MRW\Types\ArrayType\ArrayOfSeguimiento $seguimientoAbonado = null)
    {
        $this
            ->setInformacionAbonado($informacionAbonado)
            ->setSeguimientoAbonado($seguimientoAbonado);
    }

    public function getInformacionAbonado(): ?\Kavinsky\MRW\Types\StructType\Cliente
    {
        return $this->InformacionAbonado ?? null;
    }

    public function setInformacionAbonado(?\Kavinsky\MRW\Types\StructType\Cliente $informacionAbonado = null): self
    {
        if (is_null($informacionAbonado) || (is_array($informacionAbonado) && empty($informacionAbonado))) {
            unset($this->InformacionAbonado);
        } else {
            $this->InformacionAbonado = $informacionAbonado;
        }

        return $this;
    }


    public function getSeguimientoAbonado(): ?\Kavinsky\MRW\Types\ArrayType\ArrayOfSeguimiento
    {
        return $this->SeguimientoAbonado ?? null;
    }


    public function setSeguimientoAbonado(?\Kavinsky\MRW\Types\ArrayType\ArrayOfSeguimiento $seguimientoAbonado = null): self
    {
        if (is_null($seguimientoAbonado) || (is_array($seguimientoAbonado) && empty($seguimientoAbonado))) {
            unset($this->SeguimientoAbonado);
        } else {
            $this->SeguimientoAbonado = $seguimientoAbonado;
        }

        return $this;
    }
}
