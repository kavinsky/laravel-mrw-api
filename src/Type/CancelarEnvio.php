<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelarEnvio implements RequestInterface
{
    private ?CancelarEnvioRequest $request = null;

    public function __construct(?CancelarEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?CancelarEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?CancelarEnvioRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
