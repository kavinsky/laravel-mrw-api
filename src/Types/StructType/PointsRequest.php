<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

/**
 * This class stands for PointsRequest StructType
 */
#[AllowDynamicProperties]
class PointsRequest extends BaseRequest
{
    /**
     * The Point
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PointRequest $Point = null;

    /**
     * Constructor method for PointsRequest
     *
     * @uses PointsRequest::setPoint()
     */
    public function __construct(?PointRequest $point = null)
    {
        $this
            ->setPoint($point);
    }

    /**
     * Get Point value
     */
    public function getPoint(): ?PointRequest
    {
        return $this->Point;
    }

    /**
     * Set Point value
     *
     * @return \StructType\PointsRequest
     */
    public function setPoint(?PointRequest $point = null): self
    {
        $this->Point = $point;

        return $this;
    }
}
