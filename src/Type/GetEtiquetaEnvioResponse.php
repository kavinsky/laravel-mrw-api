<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEtiquetaEnvioResponse implements ResultInterface
{
    private ?EtiquetaEnvioResponse $GetEtiquetaEnvioResult = null;

    public function getGetEtiquetaEnvioResult(): ?EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioResult;
    }

    public function withGetEtiquetaEnvioResult(?EtiquetaEnvioResponse $GetEtiquetaEnvioResult): static
    {
        $new = clone $this;
        $new->GetEtiquetaEnvioResult = $GetEtiquetaEnvioResult;

        return $new;
    }
}
