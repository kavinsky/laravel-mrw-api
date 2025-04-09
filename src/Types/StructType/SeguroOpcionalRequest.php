<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeguroOpcionalRequest StructType
 */
#[AllowDynamicProperties]
class SeguroOpcionalRequest extends AbstractStructBase
{
    /**
     * The CodigoNaturaleza
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoNaturaleza = null;

    /**
     * The CantidadBoletos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CantidadBoletos = null;

    /**
     * The ValorAsegurado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ValorAsegurado = null;

    /**
     * Constructor method for SeguroOpcionalRequest
     *
     * @uses SeguroOpcionalRequest::setCodigoNaturaleza()
     * @uses SeguroOpcionalRequest::setCantidadBoletos()
     * @uses SeguroOpcionalRequest::setValorAsegurado()
     */
    public function __construct(?string $codigoNaturaleza = null, ?string $cantidadBoletos = null, ?string $valorAsegurado = null)
    {
        $this
            ->setCodigoNaturaleza($codigoNaturaleza)
            ->setCantidadBoletos($cantidadBoletos)
            ->setValorAsegurado($valorAsegurado);
    }

    /**
     * Get CodigoNaturaleza value
     */
    public function getCodigoNaturaleza(): ?string
    {
        return $this->CodigoNaturaleza;
    }

    /**
     * Set CodigoNaturaleza value
     *
     * @return \StructType\SeguroOpcionalRequest
     */
    public function setCodigoNaturaleza(?string $codigoNaturaleza = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoNaturaleza) && ! is_string($codigoNaturaleza)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoNaturaleza, true), gettype($codigoNaturaleza)), __LINE__);
        }
        $this->CodigoNaturaleza = $codigoNaturaleza;

        return $this;
    }

    /**
     * Get CantidadBoletos value
     */
    public function getCantidadBoletos(): ?string
    {
        return $this->CantidadBoletos;
    }

    /**
     * Set CantidadBoletos value
     *
     * @return \StructType\SeguroOpcionalRequest
     */
    public function setCantidadBoletos(?string $cantidadBoletos = null): self
    {
        // validation for constraint: string
        if (! is_null($cantidadBoletos) && ! is_string($cantidadBoletos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cantidadBoletos, true), gettype($cantidadBoletos)), __LINE__);
        }
        $this->CantidadBoletos = $cantidadBoletos;

        return $this;
    }

    /**
     * Get ValorAsegurado value
     */
    public function getValorAsegurado(): ?string
    {
        return $this->ValorAsegurado;
    }

    /**
     * Set ValorAsegurado value
     *
     * @return \StructType\SeguroOpcionalRequest
     */
    public function setValorAsegurado(?string $valorAsegurado = null): self
    {
        // validation for constraint: string
        if (! is_null($valorAsegurado) && ! is_string($valorAsegurado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorAsegurado, true), gettype($valorAsegurado)), __LINE__);
        }
        $this->ValorAsegurado = $valorAsegurado;

        return $this;
    }
}
