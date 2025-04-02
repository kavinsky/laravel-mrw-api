<?php

namespace Kavinsky\MRW\Type;

class CancelarEnvioRequest extends BaseRequest
{
    private ?CancelaEnvioRequest $CancelaEnvio = null;

    public function getCancelaEnvio(): ?CancelaEnvioRequest
    {
        return $this->CancelaEnvio;
    }

    public function withCancelaEnvio(?CancelaEnvioRequest $CancelaEnvio): static
    {
        $new = clone $this;
        $new->CancelaEnvio = $CancelaEnvio;

        return $new;
    }
}
