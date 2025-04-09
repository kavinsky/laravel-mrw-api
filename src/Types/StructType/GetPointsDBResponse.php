<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPointsDBResponse StructType
 */
#[AllowDynamicProperties]
class GetPointsDBResponse extends AbstractStructBase
{
    /**
     * The GetPointsDBResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PointsResponse $GetPointsDBResult = null;

    /**
     * Constructor method for GetPointsDBResponse
     *
     * @uses GetPointsDBResponse::setGetPointsDBResult()
     */
    public function __construct(?PointsResponse $getPointsDBResult = null)
    {
        $this
            ->setGetPointsDBResult($getPointsDBResult);
    }

    /**
     * Get GetPointsDBResult value
     */
    public function getGetPointsDBResult(): ?PointsResponse
    {
        return $this->GetPointsDBResult;
    }

    /**
     * Set GetPointsDBResult value
     *
     * @return \StructType\GetPointsDBResponse
     */
    public function setGetPointsDBResult(?PointsResponse $getPointsDBResult = null): self
    {
        $this->GetPointsDBResult = $getPointsDBResult;

        return $this;
    }
}
