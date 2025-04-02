<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmitirEnvioEC implements RequestInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\TransmitirEnvioECRequest
     */
    private ?\Kavinsky\MRW\Type\TransmitirEnvioECRequest $request = null;

    public function __construct(?\Kavinsky\MRW\Type\TransmitirEnvioECRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest() : ?\Kavinsky\MRW\Type\TransmitirEnvioECRequest
    {
        return $this->request;
    }

    public function withRequest(?\Kavinsky\MRW\Type\TransmitirEnvioECRequest $request) : static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}

