<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class GetPointsDBResponse extends AbstractStructBase
{
    protected ?PointsResponse $GetPointsDBResult = null;

    public function __construct(?PointsResponse $getPointsDBResult = null)
    {
        $this
            ->setGetPointsDBResult($getPointsDBResult);
    }

    public function getGetPointsDBResult(): ?PointsResponse
    {
        return $this->GetPointsDBResult;
    }

    public function setGetPointsDBResult(?PointsResponse $getPointsDBResult = null): self
    {
        $this->GetPointsDBResult = $getPointsDBResult;

        return $this;
    }
}
