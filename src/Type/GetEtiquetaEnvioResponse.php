<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEtiquetaEnvioResponse implements ResultInterface
{
    /**
     * @var null | \Kavinsky\MRW\Type\EtiquetaEnvioResponse
     */
    private ?\Kavinsky\MRW\Type\EtiquetaEnvioResponse $GetEtiquetaEnvioResult = null;

    public function getGetEtiquetaEnvioResult() : ?\Kavinsky\MRW\Type\EtiquetaEnvioResponse
    {
        return $this->GetEtiquetaEnvioResult;
    }

    public function withGetEtiquetaEnvioResult(?\Kavinsky\MRW\Type\EtiquetaEnvioResponse $GetEtiquetaEnvioResult) : static
    {
        $new = clone $this;
        $new->GetEtiquetaEnvioResult = $GetEtiquetaEnvioResult;

        return $new;
    }
}

