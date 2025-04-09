<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class PointsRequest extends BaseRequest
{
    protected ?PointRequest $Point = null;

    public function __construct(?PointRequest $point = null)
    {
        $this
            ->setPoint($point);
    }

    public function getPoint(): ?PointRequest
    {
        return $this->Point;
    }

    public function setPoint(?PointRequest $point = null): self
    {
        $this->Point = $point;

        return $this;
    }
}
