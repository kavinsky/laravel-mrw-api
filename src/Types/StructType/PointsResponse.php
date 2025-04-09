<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfPuntoDeRedDTO;

/**
 * This class stands for PointsResponse StructType
 */
#[AllowDynamicProperties]
class PointsResponse extends BaseResponse
{
    /**
     * The PointList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ArrayOfPuntoDeRedDTO $PointList = null;

    /**
     * Constructor method for PointsResponse
     *
     * @uses PointsResponse::setPointList()
     */
    public function __construct(?ArrayOfPuntoDeRedDTO $pointList = null)
    {
        $this
            ->setPointList($pointList);
    }

    /**
     * Get PointList value
     */
    public function getPointList(): ?ArrayOfPuntoDeRedDTO
    {
        return $this->PointList;
    }

    /**
     * Set PointList value
     *
     * @return \StructType\PointsResponse
     */
    public function setPointList(?ArrayOfPuntoDeRedDTO $pointList = null): self
    {
        $this->PointList = $pointList;

        return $this;
    }
}
