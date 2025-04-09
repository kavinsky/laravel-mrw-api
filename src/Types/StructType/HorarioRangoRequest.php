<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HorarioRangoRequest StructType
 */
#[AllowDynamicProperties]
class HorarioRangoRequest extends AbstractStructBase
{
    /**
     * The Desde
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Desde = null;

    /**
     * The Hasta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Hasta = null;

    /**
     * Constructor method for HorarioRangoRequest
     *
     * @uses HorarioRangoRequest::setDesde()
     * @uses HorarioRangoRequest::setHasta()
     */
    public function __construct(?string $desde = null, ?string $hasta = null)
    {
        $this
            ->setDesde($desde)
            ->setHasta($hasta);
    }

    /**
     * Get Desde value
     */
    public function getDesde(): ?string
    {
        return $this->Desde;
    }

    /**
     * Set Desde value
     *
     * @return \StructType\HorarioRangoRequest
     */
    public function setDesde(?string $desde = null): self
    {
        // validation for constraint: string
        if (! is_null($desde) && ! is_string($desde)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desde, true), gettype($desde)), __LINE__);
        }
        $this->Desde = $desde;

        return $this;
    }

    /**
     * Get Hasta value
     */
    public function getHasta(): ?string
    {
        return $this->Hasta;
    }

    /**
     * Set Hasta value
     *
     * @return \StructType\HorarioRangoRequest
     */
    public function setHasta(?string $hasta = null): self
    {
        // validation for constraint: string
        if (! is_null($hasta) && ! is_string($hasta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hasta, true), gettype($hasta)), __LINE__);
        }
        $this->Hasta = $hasta;

        return $this;
    }
}
