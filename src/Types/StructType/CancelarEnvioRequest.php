<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class CancelarEnvioRequest extends BaseRequest
{
    protected ?CancelaEnvioRequest $CancelaEnvio = null;

    public function __construct(?CancelaEnvioRequest $cancelaEnvio = null)
    {
        $this
            ->setCancelaEnvio($cancelaEnvio);
    }

    public function getCancelaEnvio(): ?CancelaEnvioRequest
    {
        return $this->CancelaEnvio;
    }

    public function setCancelaEnvio(?CancelaEnvioRequest $cancelaEnvio = null): self
    {
        $this->CancelaEnvio = $cancelaEnvio;

        return $this;
    }
}
