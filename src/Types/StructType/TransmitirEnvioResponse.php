<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class TransmitirEnvioResponse extends BaseResponse
{
    protected ?TransmitirEnvioResponse $TransmitirEnvioResult = null;

    protected ?string $NumEnvio = null;

    protected ?string $Url = null;

    public function __construct(?TransmitirEnvioResponse $transmitirEnvioResult = null, ?string $numEnvio = null, ?string $url = null)
    {
        $this
            ->setTransmitirEnvioResult($transmitirEnvioResult)
            ->setNumEnvio($numEnvio)
            ->setUrl($url);
    }

    public function getTransmitirEnvioResult(): ?TransmitirEnvioResponse
    {
        return $this->TransmitirEnvioResult;
    }

    public function setTransmitirEnvioResult(?TransmitirEnvioResponse $transmitirEnvioResult = null): self
    {
        $this->TransmitirEnvioResult = $transmitirEnvioResult;

        return $this;
    }

    public function getNumEnvio(): ?string
    {
        return $this->NumEnvio;
    }

    public function setNumEnvio(?string $numEnvio = null): self
    {
        $this->NumEnvio = $numEnvio;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function setUrl(?string $url = null): self
    {
        $this->Url = $url;

        return $this;
    }
}
