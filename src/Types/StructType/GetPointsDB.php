<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class GetPointsDB extends AbstractStructBase
{
    protected ?PointsRequest $request = null;

    public function __construct(?PointsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    public function getRequest(): ?PointsRequest
    {
        return $this->request;
    }

    public function setRequest(?PointsRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
