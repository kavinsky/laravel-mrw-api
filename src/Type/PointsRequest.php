<?php

namespace Kavinsky\MRW\Type;

class PointsRequest extends BaseRequest
{
    private ?PointRequest $Point = null;

    public function getPoint(): ?PointRequest
    {
        return $this->Point;
    }

    public function withPoint(?PointRequest $Point): static
    {
        $new = clone $this;
        $new->Point = $Point;

        return $new;
    }
}
