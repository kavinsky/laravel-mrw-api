<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEtiquetaEnvioInternacionalResponse implements ResultInterface
{
    private ?EtiquetaEnvioResponse $GetEtiquetaEnvioInternacionalResult = null;

    public function getGetEtiquetaEnvioInternacionalResult(): ?EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioInternacionalResult;
    }

    public function withGetEtiquetaEnvioInternacionalResult(?EtiquetaEnvioResponse $GetEtiquetaEnvioInternacionalResult): static
    {
        $new = clone $this;
        $new->GetEtiquetaEnvioInternacionalResult = $GetEtiquetaEnvioInternacionalResult;

        return $new;
    }
}
