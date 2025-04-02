<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransmEnvioInternacionalResponse implements ResultInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\TransmEnvioResponse
     */
    private ?\Kavinsky\MRW\Type\TransmEnvioResponse $TransmEnvioInternacionalResult = null;

    public function getTransmEnvioInternacionalResult() : ?\Kavinsky\MRW\Type\TransmEnvioResponse
    {
        return $this->TransmEnvioInternacionalResult;
    }

    public function withTransmEnvioInternacionalResult(?\Kavinsky\MRW\Type\TransmEnvioResponse $TransmEnvioInternacionalResult) : static
    {
        $new = clone $this;
        $new->TransmEnvioInternacionalResult = $TransmEnvioInternacionalResult;

        return $new;
    }
}

