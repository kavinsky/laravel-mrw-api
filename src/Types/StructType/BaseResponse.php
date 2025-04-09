<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseResponse StructType
 */
#[AllowDynamicProperties]
abstract class BaseResponse extends AbstractStructBase
{
    /**
     * The Estado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Estado = null;

    /**
     * The Mensaje
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Mensaje = null;

    /**
     * Constructor method for BaseResponse
     *
     * @uses BaseResponse::setEstado()
     * @uses BaseResponse::setMensaje()
     */
    public function __construct(?string $estado = null, ?string $mensaje = null)
    {
        $this
            ->setEstado($estado)
            ->setMensaje($mensaje);
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
     * @return \StructType\BaseResponse
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
     * Get Mensaje value
     */
    public function getMensaje(): ?string
    {
        return $this->Mensaje;
    }

    /**
     * Set Mensaje value
     *
     * @return \StructType\BaseResponse
     */
    public function setMensaje(?string $mensaje = null): self
    {
        // validation for constraint: string
        if (! is_null($mensaje) && ! is_string($mensaje)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mensaje, true), gettype($mensaje)), __LINE__);
        }
        $this->Mensaje = $mensaje;

        return $this;
    }
}
