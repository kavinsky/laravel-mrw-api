<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BultoIntRequest StructType
 */
#[AllowDynamicProperties]
class BultoIntRequest extends AbstractStructBase
{
    /**
     * The Alto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Alto = null;

    /**
     * The Largo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Largo = null;

    /**
     * The Ancho
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Ancho = null;

    /**
     * The Dimension
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Dimension = null;

    /**
     * Constructor method for BultoIntRequest
     *
     * @uses BultoIntRequest::setAlto()
     * @uses BultoIntRequest::setLargo()
     * @uses BultoIntRequest::setAncho()
     * @uses BultoIntRequest::setDimension()
     */
    public function __construct(?string $alto = null, ?string $largo = null, ?string $ancho = null, ?string $dimension = null)
    {
        $this
            ->setAlto($alto)
            ->setLargo($largo)
            ->setAncho($ancho)
            ->setDimension($dimension);
    }

    /**
     * Get Alto value
     */
    public function getAlto(): ?string
    {
        return $this->Alto;
    }

    /**
     * Set Alto value
     *
     * @return \StructType\BultoIntRequest
     */
    public function setAlto(?string $alto = null): self
    {
        // validation for constraint: string
        if (! is_null($alto) && ! is_string($alto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alto, true), gettype($alto)), __LINE__);
        }
        $this->Alto = $alto;

        return $this;
    }

    /**
     * Get Largo value
     */
    public function getLargo(): ?string
    {
        return $this->Largo;
    }

    /**
     * Set Largo value
     *
     * @return \StructType\BultoIntRequest
     */
    public function setLargo(?string $largo = null): self
    {
        // validation for constraint: string
        if (! is_null($largo) && ! is_string($largo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($largo, true), gettype($largo)), __LINE__);
        }
        $this->Largo = $largo;

        return $this;
    }

    /**
     * Get Ancho value
     */
    public function getAncho(): ?string
    {
        return $this->Ancho;
    }

    /**
     * Set Ancho value
     *
     * @return \StructType\BultoIntRequest
     */
    public function setAncho(?string $ancho = null): self
    {
        // validation for constraint: string
        if (! is_null($ancho) && ! is_string($ancho)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ancho, true), gettype($ancho)), __LINE__);
        }
        $this->Ancho = $ancho;

        return $this;
    }

    /**
     * Get Dimension value
     */
    public function getDimension(): ?string
    {
        return $this->Dimension;
    }

    /**
     * Set Dimension value
     *
     * @return \StructType\BultoIntRequest
     */
    public function setDimension(?string $dimension = null): self
    {
        // validation for constraint: string
        if (! is_null($dimension) && ! is_string($dimension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimension, true), gettype($dimension)), __LINE__);
        }
        $this->Dimension = $dimension;

        return $this;
    }
}
