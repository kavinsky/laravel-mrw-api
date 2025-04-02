<?php

namespace Kavinsky\MRW\Type;

class TransEnvioECResponse extends BaseResponse
{
    /**
     * @var null | string
     */
    private ?string $NumeroSolicitud = null;

    /**
     * @var null | \Kavinsky\MRW\Type\ArrayOfLabel
     */
    private ?\Kavinsky\MRW\Type\ArrayOfLabel $Labels = null;

    public function getNumeroSolicitud() : ?string
    {
        return $this->NumeroSolicitud;
    }

    public function withNumeroSolicitud(?string $NumeroSolicitud) : static
    {
        $new = clone $this;
        $new->NumeroSolicitud = $NumeroSolicitud;

        return $new;
    }

    public function getLabels() : ?\Kavinsky\MRW\Type\ArrayOfLabel
    {
        return $this->Labels;
    }

    public function withLabels(?\Kavinsky\MRW\Type\ArrayOfLabel $Labels) : static
    {
        $new = clone $this;
        $new->Labels = $Labels;

        return $new;
    }
}

