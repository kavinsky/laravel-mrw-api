<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransmEnvioInternacional implements RequestInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\TransmEnvioIntRequest
     */
    private ?\Kavinsky\MRW\Type\TransmEnvioIntRequest $request = null;

    public function __construct(?\Kavinsky\MRW\Type\TransmEnvioIntRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest() : ?\Kavinsky\MRW\Type\TransmEnvioIntRequest
    {
        return $this->request;
    }

    public function withRequest(?\Kavinsky\MRW\Type\TransmEnvioIntRequest $request) : static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}

