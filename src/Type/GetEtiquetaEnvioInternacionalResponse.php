<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEtiquetaEnvioInternacionalResponse implements ResultInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\EtiquetaEnvioResponse
     */
    private ?\Kavinsky\MRW\Type\EtiquetaEnvioResponse $GetEtiquetaEnvioInternacionalResult = null;

    public function getGetEtiquetaEnvioInternacionalResult() : ?\Kavinsky\MRW\Type\EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioInternacionalResult;
    }

    public function withGetEtiquetaEnvioInternacionalResult(?\Kavinsky\MRW\Type\EtiquetaEnvioResponse $GetEtiquetaEnvioInternacionalResult) : static
    {
        $new = clone $this;
        $new->GetEtiquetaEnvioInternacionalResult = $GetEtiquetaEnvioInternacionalResult;

        return $new;
    }
}

