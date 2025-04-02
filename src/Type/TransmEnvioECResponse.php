<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransmEnvioECResponse implements ResultInterface
{
    private ?TransEnvioECResponse $TransmEnvioECResult = null;

    public function getTransmEnvioECResult(): ?TransEnvioECResponse
    {
        return $this->TransmEnvioECResult;
    }

    public function withTransmEnvioECResult(?TransEnvioECResponse $TransmEnvioECResult): static
    {
        $new = clone $this;
        $new->TransmEnvioECResult = $TransmEnvioECResult;

        return $new;
    }
}
