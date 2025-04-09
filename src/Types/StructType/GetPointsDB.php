<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPointsDB StructType
 */
#[AllowDynamicProperties]
class GetPointsDB extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PointsRequest $request = null;

    /**
     * Constructor method for GetPointsDB
     *
     * @uses GetPointsDB::setRequest()
     */
    public function __construct(?PointsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }

    /**
     * Get request value
     */
    public function getRequest(): ?PointsRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return \StructType\GetPointsDB
     */
    public function setRequest(?PointsRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
