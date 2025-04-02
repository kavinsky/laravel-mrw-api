<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmEnvio implements RequestInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\TransmEnvioRequest
     */
    private ?\Kavinsky\MRW\Type\TransmEnvioRequest $request = null;

    public function __construct(?\Kavinsky\MRW\Type\TransmEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest() : ?\Kavinsky\MRW\Type\TransmEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?\Kavinsky\MRW\Type\TransmEnvioRequest $request) : static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}

