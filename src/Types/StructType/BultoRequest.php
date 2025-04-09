<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BultoRequest StructType
 */
#[AllowDynamicProperties]
class BultoRequest extends AbstractStructBase
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
     * The Referencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Referencia = null;

    /**
     * The Peso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Peso = null;

    /**
     * The NumeroBulto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroBulto = null;

    /**
     * Constructor method for BultoRequest
     *
     * @uses BultoRequest::setAlto()
     * @uses BultoRequest::setLargo()
     * @uses BultoRequest::setAncho()
     * @uses BultoRequest::setDimension()
     * @uses BultoRequest::setReferencia()
     * @uses BultoRequest::setPeso()
     * @uses BultoRequest::setNumeroBulto()
     */
    public function __construct(?string $alto = null, ?string $largo = null, ?string $ancho = null, ?string $dimension = null, ?string $referencia = null, ?string $peso = null, ?string $numeroBulto = null)
    {
        $this
            ->setAlto($alto)
            ->setLargo($largo)
            ->setAncho($ancho)
            ->setDimension($dimension)
            ->setReferencia($referencia)
            ->setPeso($peso)
            ->setNumeroBulto($numeroBulto);
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
     * @return \StructType\BultoRequest
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
     * @return \StructType\BultoRequest
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
     * @return \StructType\BultoRequest
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
     * @return \StructType\BultoRequest
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

    /**
     * Get Referencia value
     */
    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    /**
     * Set Referencia value
     *
     * @return \StructType\BultoRequest
     */
    public function setReferencia(?string $referencia = null): self
    {
        // validation for constraint: string
        if (! is_null($referencia) && ! is_string($referencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        $this->Referencia = $referencia;

        return $this;
    }

    /**
     * Get Peso value
     */
    public function getPeso(): ?string
    {
        return $this->Peso;
    }

    /**
     * Set Peso value
     *
     * @return \StructType\BultoRequest
     */
    public function setPeso(?string $peso = null): self
    {
        // validation for constraint: string
        if (! is_null($peso) && ! is_string($peso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($peso, true), gettype($peso)), __LINE__);
        }
        $this->Peso = $peso;

        return $this;
    }

    /**
     * Get NumeroBulto value
     */
    public function getNumeroBulto(): ?string
    {
        return $this->NumeroBulto;
    }

    /**
     * Set NumeroBulto value
     *
     * @return \StructType\BultoRequest
     */
    public function setNumeroBulto(?string $numeroBulto = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroBulto) && ! is_string($numeroBulto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroBulto, true), gettype($numeroBulto)), __LINE__);
        }
        $this->NumeroBulto = $numeroBulto;

        return $this;
    }
}
