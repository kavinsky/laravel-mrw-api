<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPointsDBResponse implements ResultInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\PointsResponse
     */
    private ?\Kavinsky\MRW\Type\PointsResponse $GetPointsDBResult = null;

    public function getGetPointsDBResult() : ?\Kavinsky\MRW\Type\PointsResponse
    {
        return $this->GetPointsDBResult;
    }

    public function withGetPointsDBResult(?\Kavinsky\MRW\Type\PointsResponse $GetPointsDBResult) : static
    {
        $new = clone $this;
        $new->GetPointsDBResult = $GetPointsDBResult;

        return $new;
    }
}

