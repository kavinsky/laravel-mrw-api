<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmEnvioEC implements RequestInterface
{
    private ?TransmEnvioRequest $request = null;

    public function __construct(?TransmEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?TransmEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?TransmEnvioRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
