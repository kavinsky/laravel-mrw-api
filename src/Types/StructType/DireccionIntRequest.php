<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DireccionIntRequest StructType
 */
#[AllowDynamicProperties]
class DireccionIntRequest extends AbstractStructBase
{
    /**
     * The Direccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Direccion = null;

    /**
     * The CodigoPostal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPostal = null;

    /**
     * The Poblacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Poblacion = null;

    /**
     * The Estado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Estado = null;

    /**
     * The CodigoPais
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPais = null;

    /**
     * Constructor method for DireccionIntRequest
     *
     * @uses DireccionIntRequest::setDireccion()
     * @uses DireccionIntRequest::setCodigoPostal()
     * @uses DireccionIntRequest::setPoblacion()
     * @uses DireccionIntRequest::setEstado()
     * @uses DireccionIntRequest::setCodigoPais()
     */
    public function __construct(?string $direccion = null, ?string $codigoPostal = null, ?string $poblacion = null, ?string $estado = null, ?string $codigoPais = null)
    {
        $this
            ->setDireccion($direccion)
            ->setCodigoPostal($codigoPostal)
            ->setPoblacion($poblacion)
            ->setEstado($estado)
            ->setCodigoPais($codigoPais);
    }

    /**
     * Get Direccion value
     */
    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    /**
     * Set Direccion value
     *
     * @return \StructType\DireccionIntRequest
     */
    public function setDireccion(?string $direccion = null): self
    {
        // validation for constraint: string
        if (! is_null($direccion) && ! is_string($direccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccion, true), gettype($direccion)), __LINE__);
        }
        $this->Direccion = $direccion;

        return $this;
    }

    /**
     * Get CodigoPostal value
     */
    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    /**
     * Set CodigoPostal value
     *
     * @return \StructType\DireccionIntRequest
     */
    public function setCodigoPostal(?string $codigoPostal = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPostal) && ! is_string($codigoPostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPostal, true), gettype($codigoPostal)), __LINE__);
        }
        $this->CodigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get Poblacion value
     */
    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    /**
     * Set Poblacion value
     *
     * @return \StructType\DireccionIntRequest
     */
    public function setPoblacion(?string $poblacion = null): self
    {
        // validation for constraint: string
        if (! is_null($poblacion) && ! is_string($poblacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($poblacion, true), gettype($poblacion)), __LINE__);
        }
        $this->Poblacion = $poblacion;

        return $this;
    }

    /**
     * Get Estado value
     */
    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    /**
     * Set Estado value
     *
     * @return \StructType\DireccionIntRequest
     */
    public function setEstado(?string $estado = null): self
    {
        // validation for constraint: string
        if (! is_null($estado) && ! is_string($estado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estado, true), gettype($estado)), __LINE__);
        }
        $this->Estado = $estado;

        return $this;
    }

    /**
     * Get CodigoPais value
     */
    public function getCodigoPais(): ?string
    {
        return $this->CodigoPais;
    }

    /**
     * Set CodigoPais value
     *
     * @return \StructType\DireccionIntRequest
     */
    public function setCodigoPais(?string $codigoPais = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPais) && ! is_string($codigoPais)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPais, true), gettype($codigoPais)), __LINE__);
        }
        $this->CodigoPais = $codigoPais;

        return $this;
    }
}
