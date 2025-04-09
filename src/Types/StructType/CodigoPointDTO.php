<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodigoPointDTO StructType
 */
#[AllowDynamicProperties]
class CodigoPointDTO extends AbstractStructBase
{
    /**
     * The Codigo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Codigo = null;

    /**
     * The Tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Tipo = null;

    /**
     * Constructor method for CodigoPointDTO
     *
     * @uses CodigoPointDTO::setCodigo()
     * @uses CodigoPointDTO::setTipo()
     */
    public function __construct(?string $codigo = null, ?string $tipo = null)
    {
        $this
            ->setCodigo($codigo)
            ->setTipo($tipo);
    }

    /**
     * Get Codigo value
     */
    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    /**
     * Set Codigo value
     *
     * @return \StructType\CodigoPointDTO
     */
    public function setCodigo(?string $codigo = null): self
    {
        // validation for constraint: string
        if (! is_null($codigo) && ! is_string($codigo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigo, true), gettype($codigo)), __LINE__);
        }
        $this->Codigo = $codigo;

        return $this;
    }

    /**
     * Get Tipo value
     */
    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    /**
     * Set Tipo value
     *
     * @return \StructType\CodigoPointDTO
     */
    public function setTipo(?string $tipo = null): self
    {
        // validation for constraint: string
        if (! is_null($tipo) && ! is_string($tipo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipo, true), gettype($tipo)), __LINE__);
        }
        $this->Tipo = $tipo;

        return $this;
    }
}
