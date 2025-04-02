<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmEnvioInternacional implements RequestInterface
{
    private ?TransmEnvioIntRequest $request = null;

    public function __construct(?TransmEnvioIntRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?TransmEnvioIntRequest
    {
        return $this->request;
    }

    public function withRequest(?TransmEnvioIntRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
