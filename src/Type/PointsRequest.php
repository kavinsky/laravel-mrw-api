<?php

namespace Kavinsky\MRW\Type;

class PointsRequest extends BaseRequest
{
    /**
     * @var null | \Kavinsky\MRW\Type\PointRequest
     */
    private ?\Kavinsky\MRW\Type\PointRequest $Point = null;

    public function getPoint() : ?\Kavinsky\MRW\Type\PointRequest
    {
        return $this->Point;
    }

    public function withPoint(?\Kavinsky\MRW\Type\PointRequest $Point) : static
    {
        $new = clone $this;
        $new->Point = $Point;

        return $new;
    }
}

