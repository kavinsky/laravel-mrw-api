<?php

namespace Kavinsky\MRW\Type;

class TransEnvioECResponse extends BaseResponse
{
    private ?string $NumeroSolicitud = null;

    private ?ArrayOfLabel $Labels = null;

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

    public function getLabels(): ?ArrayOfLabel
    {
        return $this->Labels;
    }

    public function withLabels(?ArrayOfLabel $Labels): static
    {
        $new = clone $this;
        $new->Labels = $Labels;

        return $new;
    }
}
