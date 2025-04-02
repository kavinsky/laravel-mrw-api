<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransmitirEnvioResponse extends BaseResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $NumEnvio = null;

    /**
     * @var null | string
     */
    private ?string $Url = null;

    /**
     * @var null | \Kavinsky\MRW\Type\TransmitirEnvioResponse
     */
    private ?\Kavinsky\MRW\Type\TransmitirEnvioResponse $TransmitirEnvioResult = null;

    public function getNumEnvio() : ?string
    {
        return $this->NumEnvio;
    }

    public function withNumEnvio(?string $NumEnvio) : static
    {
        $new = clone $this;
        $new->NumEnvio = $NumEnvio;

        return $new;
    }

    public function getUrl() : ?string
    {
        return $this->Url;
    }

    public function withUrl(?string $Url) : static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }

    public function getTransmitirEnvioResult() : ?\Kavinsky\MRW\Type\TransmitirEnvioResponse
    {
        return $this->TransmitirEnvioResult;
    }

    public function withTransmitirEnvioResult(?\Kavinsky\MRW\Type\TransmitirEnvioResponse $TransmitirEnvioResult) : static
    {
        $new = clone $this;
        $new->TransmitirEnvioResult = $TransmitirEnvioResult;

        return $new;
    }
}

