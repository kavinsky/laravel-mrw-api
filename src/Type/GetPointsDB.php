<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPointsDB implements RequestInterface
{
    private ?PointsRequest $request = null;

    public function __construct(?PointsRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?PointsRequest
    {
        return $this->request;
    }

    public function withRequest(?PointsRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
