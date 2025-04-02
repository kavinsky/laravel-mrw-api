<?php

namespace Kavinsky\MRW\Type;

class EtiquetaEnvioRequest
{
    /**
     * @var null | string
     */
    private ?string $NumeroEnvio = null;

    /**
     * @var null | string
     */
    private ?string $NumerosEtiqueta = null;

    /**
     * @var null | string
     */
    private ?string $SeparadorNumerosEnvio = null;

    /**
     * @var null | string
     */
    private ?string $FechaInicioEnvio = null;

    /**
     * @var null | string
     */
    private ?string $FechaFinEnvio = null;

    /**
     * @var null | string
     */
    private ?string $TipoEtiquetaEnvio = null;

    /**
     * @var int
     */
    private int $ReportTopMargin;

    /**
     * @var int
     */
    private int $ReportLeftMargin;

    public function getNumeroEnvio() : ?string
    {
        return $this->NumeroEnvio;
    }

    public function withNumeroEnvio(?string $NumeroEnvio) : static
    {
        $new = clone $this;
        $new->NumeroEnvio = $NumeroEnvio;

        return $new;
    }

    public function getNumerosEtiqueta() : ?string
    {
        return $this->NumerosEtiqueta;
    }

    public function withNumerosEtiqueta(?string $NumerosEtiqueta) : static
    {
        $new = clone $this;
        $new->NumerosEtiqueta = $NumerosEtiqueta;

        return $new;
    }

    public function getSeparadorNumerosEnvio() : ?string
    {
        return $this->SeparadorNumerosEnvio;
    }

    public function withSeparadorNumerosEnvio(?string $SeparadorNumerosEnvio) : static
    {
        $new = clone $this;
        $new->SeparadorNumerosEnvio = $SeparadorNumerosEnvio;

        return $new;
    }

    public function getFechaInicioEnvio() : ?string
    {
        return $this->FechaInicioEnvio;
    }

    public function withFechaInicioEnvio(?string $FechaInicioEnvio) : static
    {
        $new = clone $this;
        $new->FechaInicioEnvio = $FechaInicioEnvio;

        return $new;
    }

    public function getFechaFinEnvio() : ?string
    {
        return $this->FechaFinEnvio;
    }

    public function withFechaFinEnvio(?string $FechaFinEnvio) : static
    {
        $new = clone $this;
        $new->FechaFinEnvio = $FechaFinEnvio;

        return $new;
    }

    public function getTipoEtiquetaEnvio() : ?string
    {
        return $this->TipoEtiquetaEnvio;
    }

    public function withTipoEtiquetaEnvio(?string $TipoEtiquetaEnvio) : static
    {
        $new = clone $this;
        $new->TipoEtiquetaEnvio = $TipoEtiquetaEnvio;

        return $new;
    }

    public function getReportTopMargin() : int
    {
        return $this->ReportTopMargin;
    }

    public function withReportTopMargin(int $ReportTopMargin) : static
    {
        $new = clone $this;
        $new->ReportTopMargin = $ReportTopMargin;

        return $new;
    }

    public function getReportLeftMargin() : int
    {
        return $this->ReportLeftMargin;
    }

    public function withReportLeftMargin(int $ReportLeftMargin) : static
    {
        $new = clone $this;
        $new->ReportLeftMargin = $ReportLeftMargin;

        return $new;
    }
}

