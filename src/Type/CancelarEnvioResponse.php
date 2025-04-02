<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CancelarEnvioResponse extends BaseResponse implements ResultInterface
{
    private ?string $NumeroSolicitud = null;

    private ?string $NumeroEnvio = null;

    private ?\Kavinsky\MRW\Type\CancelarEnvioResponse $CancelarEnvioResult = null;

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

    public function getCancelarEnvioResult(): ?\Kavinsky\MRW\Type\CancelarEnvioResponse
    {
        return $this->CancelarEnvioResult;
    }

    public function withCancelarEnvioResult(?\Kavinsky\MRW\Type\CancelarEnvioResponse $CancelarEnvioResult): static
    {
        $new = clone $this;
        $new->CancelarEnvioResult = $CancelarEnvioResult;

        return $new;
    }
}
