<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEtiquetaEnvioInternacional implements RequestInterface
{
    private ?EtiquetaEnvioRequest $request = null;

    public function __construct(?EtiquetaEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): ?EtiquetaEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?EtiquetaEnvioRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
