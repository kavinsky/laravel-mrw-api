<?php

namespace Kavinsky\MRW\Type;

class PointsResponse extends BaseResponse
{
    private ?ArrayOfPuntoDeRedDTO $PointList = null;

    public function getPointList(): ?ArrayOfPuntoDeRedDTO
    {
        return $this->PointList;
    }

    public function withPointList(?ArrayOfPuntoDeRedDTO $PointList): static
    {
        $new = clone $this;
        $new->PointList = $PointList;

        return $new;
    }
}
