<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmitirEnvioEC implements RequestInterface
{
    private ?TransmitirEnvioECRequest $request = null;

    public function __construct(?TransmitirEnvioECRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?TransmitirEnvioECRequest
    {
        return $this->request;
    }

    public function withRequest(?TransmitirEnvioECRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
