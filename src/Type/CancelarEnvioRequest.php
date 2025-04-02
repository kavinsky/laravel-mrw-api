<?php

namespace Kavinsky\MRW\Type;

class CancelarEnvioRequest extends BaseRequest
{
    /**
     * @var null | \Kavinsky\MRW\Type\CancelaEnvioRequest
     */
    private ?\Kavinsky\MRW\Type\CancelaEnvioRequest $CancelaEnvio = null;

    public function getCancelaEnvio() : ?\Kavinsky\MRW\Type\CancelaEnvioRequest
    {
        return $this->CancelaEnvio;
    }

    public function withCancelaEnvio(?\Kavinsky\MRW\Type\CancelaEnvioRequest $CancelaEnvio) : static
    {
        $new = clone $this;
        $new->CancelaEnvio = $CancelaEnvio;

        return $new;
    }
}

