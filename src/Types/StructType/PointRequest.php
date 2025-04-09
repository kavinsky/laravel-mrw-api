<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointRequest StructType
 */
#[AllowDynamicProperties]
class PointRequest extends AbstractStructBase
{
    /**
     * The codigoPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $codigoPoint = null;

    /**
     * Constructor method for PointRequest
     *
     * @uses PointRequest::setCodigoPoint()
     */
    public function __construct(?string $codigoPoint = null)
    {
        $this
            ->setCodigoPoint($codigoPoint);
    }

    /**
     * Get codigoPoint value
     */
    public function getCodigoPoint(): ?string
    {
        return $this->codigoPoint;
    }

    /**
     * Set codigoPoint value
     *
     * @return \StructType\PointRequest
     */
    public function setCodigoPoint(?string $codigoPoint = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPoint) && ! is_string($codigoPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPoint, true), gettype($codigoPoint)), __LINE__);
        }
        $this->codigoPoint = $codigoPoint;

        return $this;
    }
}
