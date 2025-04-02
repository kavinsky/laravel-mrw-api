<?php

namespace Kavinsky\MRW\Type;

class PointsResponse extends BaseResponse
{
    /**
     * @var null | \Kavinsky\MRW\Type\ArrayOfPuntoDeRedDTO
     */
    private ?\Kavinsky\MRW\Type\ArrayOfPuntoDeRedDTO $PointList = null;

    public function getPointList() : ?\Kavinsky\MRW\Type\ArrayOfPuntoDeRedDTO
    {
        return $this->PointList;
    }

    public function withPointList(?\Kavinsky\MRW\Type\ArrayOfPuntoDeRedDTO $PointList) : static
    {
        $new = clone $this;
        $new->PointList = $PointList;

        return $new;
    }
}

