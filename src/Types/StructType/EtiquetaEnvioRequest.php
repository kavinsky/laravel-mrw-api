<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EtiquetaEnvioRequest StructType
 */
#[AllowDynamicProperties]
class EtiquetaEnvioRequest extends AbstractStructBase
{
    /**
     * The ReportTopMargin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $ReportTopMargin;

    /**
     * The ReportLeftMargin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $ReportLeftMargin;

    /**
     * The NumeroEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroEnvio = null;

    /**
     * The NumerosEtiqueta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumerosEtiqueta = null;

    /**
     * The SeparadorNumerosEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SeparadorNumerosEnvio = null;

    /**
     * The FechaInicioEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $FechaInicioEnvio = null;

    /**
     * The FechaFinEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $FechaFinEnvio = null;

    /**
     * The TipoEtiquetaEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TipoEtiquetaEnvio = null;

    /**
     * Constructor method for EtiquetaEnvioRequest
     *
     * @uses EtiquetaEnvioRequest::setReportTopMargin()
     * @uses EtiquetaEnvioRequest::setReportLeftMargin()
     * @uses EtiquetaEnvioRequest::setNumeroEnvio()
     * @uses EtiquetaEnvioRequest::setNumerosEtiqueta()
     * @uses EtiquetaEnvioRequest::setSeparadorNumerosEnvio()
     * @uses EtiquetaEnvioRequest::setFechaInicioEnvio()
     * @uses EtiquetaEnvioRequest::setFechaFinEnvio()
     * @uses EtiquetaEnvioRequest::setTipoEtiquetaEnvio()
     */
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

    /**
     * Get ReportTopMargin value
     */
    public function getReportTopMargin(): int
    {
        return $this->ReportTopMargin;
    }

    /**
     * Set ReportTopMargin value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setReportTopMargin(int $reportTopMargin): self
    {
        // validation for constraint: int
        if (! is_int($reportTopMargin) && ! ctype_digit($reportTopMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reportTopMargin, true), gettype($reportTopMargin)), __LINE__);
        }
        $this->ReportTopMargin = $reportTopMargin;

        return $this;
    }

    /**
     * Get ReportLeftMargin value
     */
    public function getReportLeftMargin(): int
    {
        return $this->ReportLeftMargin;
    }

    /**
     * Set ReportLeftMargin value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setReportLeftMargin(int $reportLeftMargin): self
    {
        // validation for constraint: int
        if (! is_int($reportLeftMargin) && ! ctype_digit($reportLeftMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reportLeftMargin, true), gettype($reportLeftMargin)), __LINE__);
        }
        $this->ReportLeftMargin = $reportLeftMargin;

        return $this;
    }

    /**
     * Get NumeroEnvio value
     */
    public function getNumeroEnvio(): ?string
    {
        return $this->NumeroEnvio;
    }

    /**
     * Set NumeroEnvio value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setNumeroEnvio(?string $numeroEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroEnvio) && ! is_string($numeroEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroEnvio, true), gettype($numeroEnvio)), __LINE__);
        }
        $this->NumeroEnvio = $numeroEnvio;

        return $this;
    }

    /**
     * Get NumerosEtiqueta value
     */
    public function getNumerosEtiqueta(): ?string
    {
        return $this->NumerosEtiqueta;
    }

    /**
     * Set NumerosEtiqueta value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setNumerosEtiqueta(?string $numerosEtiqueta = null): self
    {
        // validation for constraint: string
        if (! is_null($numerosEtiqueta) && ! is_string($numerosEtiqueta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerosEtiqueta, true), gettype($numerosEtiqueta)), __LINE__);
        }
        $this->NumerosEtiqueta = $numerosEtiqueta;

        return $this;
    }

    /**
     * Get SeparadorNumerosEnvio value
     */
    public function getSeparadorNumerosEnvio(): ?string
    {
        return $this->SeparadorNumerosEnvio;
    }

    /**
     * Set SeparadorNumerosEnvio value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setSeparadorNumerosEnvio(?string $separadorNumerosEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($separadorNumerosEnvio) && ! is_string($separadorNumerosEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($separadorNumerosEnvio, true), gettype($separadorNumerosEnvio)), __LINE__);
        }
        $this->SeparadorNumerosEnvio = $separadorNumerosEnvio;

        return $this;
    }

    /**
     * Get FechaInicioEnvio value
     */
    public function getFechaInicioEnvio(): ?string
    {
        return $this->FechaInicioEnvio;
    }

    /**
     * Set FechaInicioEnvio value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setFechaInicioEnvio(?string $fechaInicioEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($fechaInicioEnvio) && ! is_string($fechaInicioEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaInicioEnvio, true), gettype($fechaInicioEnvio)), __LINE__);
        }
        $this->FechaInicioEnvio = $fechaInicioEnvio;

        return $this;
    }

    /**
     * Get FechaFinEnvio value
     */
    public function getFechaFinEnvio(): ?string
    {
        return $this->FechaFinEnvio;
    }

    /**
     * Set FechaFinEnvio value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setFechaFinEnvio(?string $fechaFinEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($fechaFinEnvio) && ! is_string($fechaFinEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaFinEnvio, true), gettype($fechaFinEnvio)), __LINE__);
        }
        $this->FechaFinEnvio = $fechaFinEnvio;

        return $this;
    }

    /**
     * Get TipoEtiquetaEnvio value
     */
    public function getTipoEtiquetaEnvio(): ?string
    {
        return $this->TipoEtiquetaEnvio;
    }

    /**
     * Set TipoEtiquetaEnvio value
     *
     * @return \StructType\EtiquetaEnvioRequest
     */
    public function setTipoEtiquetaEnvio(?string $tipoEtiquetaEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($tipoEtiquetaEnvio) && ! is_string($tipoEtiquetaEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoEtiquetaEnvio, true), gettype($tipoEtiquetaEnvio)), __LINE__);
        }
        $this->TipoEtiquetaEnvio = $tipoEtiquetaEnvio;

        return $this;
    }
}
