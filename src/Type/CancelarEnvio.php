<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelarEnvio implements RequestInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\CancelarEnvioRequest
     */
    private ?\Kavinsky\MRW\Type\CancelarEnvioRequest $request = null;

    public function __construct(?\Kavinsky\MRW\Type\CancelarEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest() : ?\Kavinsky\MRW\Type\CancelarEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?\Kavinsky\MRW\Type\CancelarEnvioRequest $request) : static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}

