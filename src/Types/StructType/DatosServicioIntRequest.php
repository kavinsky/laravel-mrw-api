<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoIntRequest;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class DatosServicioIntRequest extends AbstractStructBase
{
    protected ?string $Fecha = null;

    protected ?string $Referencia = null;

    protected ?string $CodigoServicio = null;

    protected ?string $DescripcionServicio = null;

    protected ?ArrayOfBultoIntRequest $Bultos = null;

    protected ?string $NumeroBultos = null;

    protected ?string $Peso = null;

    protected ?string $ServicioEspecial = null;

    protected ?string $CodigoMoneda = null;

    protected ?string $ValorEstadistico = null;

    protected ?string $ValorEstadisticoEuros = null;

    protected ?NotificacionIntRequest $NotificacionSMS = null;

    protected ?SeguroOpcionalRequest $SeguroOpcional = null;

    public function __construct(?string $fecha = null, ?string $referencia = null, ?string $codigoServicio = null, ?string $descripcionServicio = null, ?ArrayOfBultoIntRequest $bultos = null, ?string $numeroBultos = null, ?string $peso = null, ?string $servicioEspecial = null, ?string $codigoMoneda = null, ?string $valorEstadistico = null, ?string $valorEstadisticoEuros = null, ?NotificacionIntRequest $notificacionSMS = null, ?SeguroOpcionalRequest $seguroOpcional = null)
    {
        $this
            ->setFecha($fecha)
            ->setReferencia($referencia)
            ->setCodigoServicio($codigoServicio)
            ->setDescripcionServicio($descripcionServicio)
            ->setBultos($bultos)
            ->setNumeroBultos($numeroBultos)
            ->setPeso($peso)
            ->setServicioEspecial($servicioEspecial)
            ->setCodigoMoneda($codigoMoneda)
            ->setValorEstadistico($valorEstadistico)
            ->setValorEstadisticoEuros($valorEstadisticoEuros)
            ->setNotificacionSMS($notificacionSMS)
            ->setSeguroOpcional($seguroOpcional);
    }

    public function getFecha(): ?string
    {
        return $this->Fecha;
    }

    public function setFecha(?string $fecha = null): self
    {
        // validation for constraint: string
        $this->Fecha = $fecha;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    public function setReferencia(?string $referencia = null): self
    {
        // validation for constraint: string
        $this->Referencia = $referencia;

        return $this;
    }

    public function getCodigoServicio(): ?string
    {
        return $this->CodigoServicio;
    }

    public function setCodigoServicio(?string $codigoServicio = null): self
    {
        // validation for constraint: string
        $this->CodigoServicio = $codigoServicio;

        return $this;
    }

    public function getDescripcionServicio(): ?string
    {
        return $this->DescripcionServicio;
    }

    public function setDescripcionServicio(?string $descripcionServicio = null): self
    {
        // validation for constraint: string
        $this->DescripcionServicio = $descripcionServicio;

        return $this;
    }

    public function getBultos(): ?ArrayOfBultoIntRequest
    {
        return $this->Bultos;
    }

    public function setBultos(?ArrayOfBultoIntRequest $bultos = null): self
    {
        $this->Bultos = $bultos;

        return $this;
    }

    public function getNumeroBultos(): ?string
    {
        return $this->NumeroBultos;
    }

    public function setNumeroBultos(?string $numeroBultos = null): self
    {
        // validation for constraint: string
        $this->NumeroBultos = $numeroBultos;

        return $this;
    }

    public function getPeso(): ?string
    {
        return $this->Peso;
    }

    public function setPeso(?string $peso = null): self
    {
        // validation for constraint: string
        $this->Peso = $peso;

        return $this;
    }

    public function getServicioEspecial(): ?string
    {
        return $this->ServicioEspecial;
    }

    public function setServicioEspecial(?string $servicioEspecial = null): self
    {
        // validation for constraint: string
        $this->ServicioEspecial = $servicioEspecial;

        return $this;
    }

    public function getCodigoMoneda(): ?string
    {
        return $this->CodigoMoneda;
    }

    public function setCodigoMoneda(?string $codigoMoneda = null): self
    {
        // validation for constraint: string
        $this->CodigoMoneda = $codigoMoneda;

        return $this;
    }

    public function getValorEstadistico(): ?string
    {
        return $this->ValorEstadistico;
    }

    public function setValorEstadistico(?string $valorEstadistico = null): self
    {
        // validation for constraint: string
        $this->ValorEstadistico = $valorEstadistico;

        return $this;
    }

    public function getValorEstadisticoEuros(): ?string
    {
        return $this->ValorEstadisticoEuros;
    }

    public function setValorEstadisticoEuros(?string $valorEstadisticoEuros = null): self
    {
        // validation for constraint: string
        $this->ValorEstadisticoEuros = $valorEstadisticoEuros;

        return $this;
    }

    public function getNotificacionSMS(): ?NotificacionIntRequest
    {
        return $this->NotificacionSMS;
    }

    public function setNotificacionSMS(?NotificacionIntRequest $notificacionSMS = null): self
    {
        $this->NotificacionSMS = $notificacionSMS;

        return $this;
    }

    public function getSeguroOpcional(): ?SeguroOpcionalRequest
    {
        return $this->SeguroOpcional;
    }

    public function setSeguroOpcional(?SeguroOpcionalRequest $seguroOpcional = null): self
    {
        $this->SeguroOpcional = $seguroOpcional;

        return $this;
    }
}
