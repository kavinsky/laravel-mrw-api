<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfPuntoDeRedDTO;

#[AllowDynamicProperties]
class PointsResponse extends BaseResponse
{
    protected ?ArrayOfPuntoDeRedDTO $PointList = null;

    public function __construct(?ArrayOfPuntoDeRedDTO $pointList = null)
    {
        $this
            ->setPointList($pointList);
    }

    public function getPointList(): ?ArrayOfPuntoDeRedDTO
    {
        return $this->PointList;
    }

    public function setPointList(?ArrayOfPuntoDeRedDTO $pointList = null): self
    {
        $this->PointList = $pointList;

        return $this;
    }
}
