<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmitirEnvio implements RequestInterface
{
    private ?TransmitirEnvioRequest $request = null;

    public function __construct(?TransmitirEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?TransmitirEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?TransmitirEnvioRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
