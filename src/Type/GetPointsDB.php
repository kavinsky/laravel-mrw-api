<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPointsDB implements RequestInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\PointsRequest
     */
    private ?\Kavinsky\MRW\Type\PointsRequest $request = null;

    public function __construct(?\Kavinsky\MRW\Type\PointsRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest() : ?\Kavinsky\MRW\Type\PointsRequest
    {
        return $this->request;
    }

    public function withRequest(?\Kavinsky\MRW\Type\PointsRequest $request) : static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}

