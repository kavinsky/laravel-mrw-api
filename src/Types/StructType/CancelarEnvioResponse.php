<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class CancelarEnvioResponse extends BaseResponse
{
    protected ?CancelarEnvioResponse $CancelarEnvioResult = null;

    protected ?string $NumeroSolicitud = null;

    protected ?string $NumeroEnvio = null;

    public function __construct(?CancelarEnvioResponse $cancelarEnvioResult = null, ?string $numeroSolicitud = null, ?string $numeroEnvio = null)
    {
        $this
            ->setCancelarEnvioResult($cancelarEnvioResult)
            ->setNumeroSolicitud($numeroSolicitud)
            ->setNumeroEnvio($numeroEnvio);
    }

    public function getCancelarEnvioResult(): ?CancelarEnvioResponse
    {
        return $this->CancelarEnvioResult;
    }

    public function setCancelarEnvioResult(?CancelarEnvioResponse $cancelarEnvioResult = null): self
    {
        $this->CancelarEnvioResult = $cancelarEnvioResult;

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
}
