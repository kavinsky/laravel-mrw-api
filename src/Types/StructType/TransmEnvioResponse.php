<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class TransmEnvioResponse extends BaseResponse
{
    protected ?self $TransmEnvioResult = null;

    protected ?string $NumeroSolicitud = null;

    protected ?string $NumeroEnvio = null;

    protected ?string $Url = null;

    public function __construct(?TransmEnvioResponse $transmEnvioResult = null, ?string $numeroSolicitud = null, ?string $numeroEnvio = null, ?string $url = null)
    {
        $this
            ->setTransmEnvioResult($transmEnvioResult)
            ->setNumeroSolicitud($numeroSolicitud)
            ->setNumeroEnvio($numeroEnvio)
            ->setUrl($url);
    }

    public function getTransmEnvioResult(): ?TransmEnvioResponse
    {
        return $this->TransmEnvioResult;
    }

    public function setTransmEnvioResult(?TransmEnvioResponse $transmEnvioResult = null): self
    {
        $this->TransmEnvioResult = $transmEnvioResult;

        return $this;
    }

    public function getNumeroSolicitud(): ?string
    {
        return $this->NumeroSolicitud;
    }

    public function setNumeroSolicitud(?string $numeroSolicitud = null): self
    {
        // validation for constraint: string
        $this->NumeroSolicitud = $numeroSolicitud;

        return $this;
    }

    public function getNumeroEnvio(): ?string
    {
        return $this->NumeroEnvio;
    }

    public function setNumeroEnvio(?string $numeroEnvio = null): self
    {
        // validation for constraint: string
        $this->NumeroEnvio = $numeroEnvio;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        $this->Url = $url;

        return $this;
    }
}
