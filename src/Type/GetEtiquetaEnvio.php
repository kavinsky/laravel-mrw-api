<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetEtiquetaEnvio implements RequestInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\EtiquetaEnvioRequest
     */
    private ?\Kavinsky\MRW\Type\EtiquetaEnvioRequest $request = null;

    public function __construct(?\Kavinsky\MRW\Type\EtiquetaEnvioRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest() : ?\Kavinsky\MRW\Type\EtiquetaEnvioRequest
    {
        return $this->request;
    }

    public function withRequest(?\Kavinsky\MRW\Type\EtiquetaEnvioRequest $request) : static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}

