<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfLabel;

#[AllowDynamicProperties]
class TransEnvioECResponse extends BaseResponse
{
    protected ?string $NumeroSolicitud = null;

    protected ?ArrayOfLabel $Labels = null;

    public function __construct(?string $numeroSolicitud = null, ?ArrayOfLabel $labels = null)
    {
        $this
            ->setNumeroSolicitud($numeroSolicitud)
            ->setLabels($labels);
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

    public function getLabels(): ?ArrayOfLabel
    {
        return $this->Labels;
    }

    public function setLabels(?ArrayOfLabel $labels = null): self
    {
        $this->Labels = $labels;

        return $this;
    }
}
