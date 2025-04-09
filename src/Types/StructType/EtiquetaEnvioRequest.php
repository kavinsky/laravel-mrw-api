<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class EtiquetaEnvioRequest extends AbstractStructBase
{
    protected int $ReportTopMargin;

    protected int $ReportLeftMargin;

    protected ?string $NumeroEnvio = null;

    protected ?string $NumerosEtiqueta = null;

    protected ?string $SeparadorNumerosEnvio = null;

    protected ?string $FechaInicioEnvio = null;

    protected ?string $FechaFinEnvio = null;

    protected ?string $TipoEtiquetaEnvio = null;

    public function __construct(int $reportTopMargin, int $reportLeftMargin, ?string $numeroEnvio = null, ?string $numerosEtiqueta = null, ?string $separadorNumerosEnvio = null, ?string $fechaInicioEnvio = null, ?string $fechaFinEnvio = null, ?string $tipoEtiquetaEnvio = null)
    {
        $this
            ->setReportTopMargin($reportTopMargin)
            ->setReportLeftMargin($reportLeftMargin)
            ->setNumeroEnvio($numeroEnvio)
            ->setNumerosEtiqueta($numerosEtiqueta)
            ->setSeparadorNumerosEnvio($separadorNumerosEnvio)
            ->setFechaInicioEnvio($fechaInicioEnvio)
            ->setFechaFinEnvio($fechaFinEnvio)
            ->setTipoEtiquetaEnvio($tipoEtiquetaEnvio);
    }

    public function getReportTopMargin(): int
    {
        return $this->ReportTopMargin;
    }

    public function setReportTopMargin(int $reportTopMargin): self
    {

        $this->ReportTopMargin = $reportTopMargin;

        return $this;
    }

    public function getReportLeftMargin(): int
    {
        return $this->ReportLeftMargin;
    }

    public function setReportLeftMargin(int $reportLeftMargin): self
    {

        $this->ReportLeftMargin = $reportLeftMargin;

        return $this;
    }

    public function getNumeroEnvio(): ?string
    {
        return $this->NumeroEnvio;
    }

    public function setNumeroEnvio(?string $numeroEnvio = null): self
    {
        // validation for constraint: string
        $this->NumeroEnvio = $numeroEnvio;

        return $this;
    }

    public function getNumerosEtiqueta(): ?string
    {
        return $this->NumerosEtiqueta;
    }

    public function setNumerosEtiqueta(?string $numerosEtiqueta = null): self
    {
        // validation for constraint: string
        $this->NumerosEtiqueta = $numerosEtiqueta;

        return $this;
    }

    public function getSeparadorNumerosEnvio(): ?string
    {
        return $this->SeparadorNumerosEnvio;
    }

    public function setSeparadorNumerosEnvio(?string $separadorNumerosEnvio = null): self
    {
        // validation for constraint: string
        $this->SeparadorNumerosEnvio = $separadorNumerosEnvio;

        return $this;
    }

    public function getFechaInicioEnvio(): ?string
    {
        return $this->FechaInicioEnvio;
    }

    public function setFechaInicioEnvio(?string $fechaInicioEnvio = null): self
    {
        // validation for constraint: string
        $this->FechaInicioEnvio = $fechaInicioEnvio;

        return $this;
    }

    public function getFechaFinEnvio(): ?string
    {
        return $this->FechaFinEnvio;
    }

    public function setFechaFinEnvio(?string $fechaFinEnvio = null): self
    {
        // validation for constraint: string
        $this->FechaFinEnvio = $fechaFinEnvio;

        return $this;
    }

    public function getTipoEtiquetaEnvio(): ?string
    {
        return $this->TipoEtiquetaEnvio;
    }

    public function setTipoEtiquetaEnvio(?string $tipoEtiquetaEnvio = null): self
    {
        // validation for constraint: string
        $this->TipoEtiquetaEnvio = $tipoEtiquetaEnvio;

        return $this;
    }
}
