<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPointsDBResponse implements ResultInterface
{
    private ?PointsResponse $GetPointsDBResult = null;

    public function getGetPointsDBResult(): ?PointsResponse
    {
        return $this->GetPointsDBResult;
    }

    public function withGetPointsDBResult(?PointsResponse $GetPointsDBResult): static
    {
        $new = clone $this;
        $new->GetPointsDBResult = $GetPointsDBResult;

        return $new;
    }
}
