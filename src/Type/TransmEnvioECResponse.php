<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransmEnvioECResponse implements ResultInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\TransEnvioECResponse
     */
    private ?\Kavinsky\MRW\Type\TransEnvioECResponse $TransmEnvioECResult = null;

    public function getTransmEnvioECResult() : ?\Kavinsky\MRW\Type\TransEnvioECResponse
    {
        return $this->TransmEnvioECResult;
    }

    public function withTransmEnvioECResult(?\Kavinsky\MRW\Type\TransEnvioECResponse $TransmEnvioECResult) : static
    {
        $new = clone $this;
        $new->TransmEnvioECResult = $TransmEnvioECResult;

        return $new;
    }
}

