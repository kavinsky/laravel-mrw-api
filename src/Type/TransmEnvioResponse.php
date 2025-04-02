<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransmEnvioResponse extends BaseResponse implements ResultInterface
{
    private ?string $NumeroSolicitud = null;

    private ?string $NumeroEnvio = null;

    private ?string $Url = null;

    private ?\Kavinsky\MRW\Type\TransmEnvioResponse $TransmEnvioResult = null;

    public function getNumeroSolicitud(): ?string
    {
        return $this->NumeroSolicitud;
    }

    public function withNumeroSolicitud(?string $NumeroSolicitud): static
    {
        $new = clone $this;
        $new->NumeroSolicitud = $NumeroSolicitud;

        return $new;
    }

    public function getNumeroEnvio(): ?string
    {
        return $this->NumeroEnvio;
    }

    public function withNumeroEnvio(?string $NumeroEnvio): static
    {
        $new = clone $this;
        $new->NumeroEnvio = $NumeroEnvio;

        return $new;
    }

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function withUrl(?string $Url): static
    {
        $new = clone $this;
        $new->Url = $Url;

        return $new;
    }

    public function getTransmEnvioResult(): ?\Kavinsky\MRW\Type\TransmEnvioResponse
    {
        return $this->TransmEnvioResult;
    }

    public function withTransmEnvioResult(?\Kavinsky\MRW\Type\TransmEnvioResponse $TransmEnvioResult): static
    {
        $new = clone $this;
        $new->TransmEnvioResult = $TransmEnvioResult;

        return $new;
    }
}
