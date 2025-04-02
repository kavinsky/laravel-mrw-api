<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransmEnvioInternacionalResponse implements ResultInterface
{
    private ?TransmEnvioResponse $TransmEnvioInternacionalResult = null;

    public function getTransmEnvioInternacionalResult(): ?TransmEnvioResponse
    {
        return $this->TransmEnvioInternacionalResult;
    }

    public function withTransmEnvioInternacionalResult(?TransmEnvioResponse $TransmEnvioInternacionalResult): static
    {
        $new = clone $this;
        $new->TransmEnvioInternacionalResult = $TransmEnvioInternacionalResult;

        return $new;
    }
}
