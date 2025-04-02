<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmitirEnvio implements RequestInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\TransmitirEnvioRequest
     */
    private ?\Kavinsky\MRW\Type\TransmitirEnvioRequest $request = null;

    public function __construct(?\Kavinsky\MRW\Type\TransmitirEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest() : ?\Kavinsky\MRW\Type\TransmitirEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?\Kavinsky\MRW\Type\TransmitirEnvioRequest $request) : static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}

