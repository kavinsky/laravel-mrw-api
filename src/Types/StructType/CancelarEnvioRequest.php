<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

/**
 * This class stands for CancelarEnvioRequest StructType
 */
#[AllowDynamicProperties]
class CancelarEnvioRequest extends BaseRequest
{
    /**
     * The CancelaEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CancelaEnvioRequest $CancelaEnvio = null;

    /**
     * Constructor method for CancelarEnvioRequest
     *
     * @uses CancelarEnvioRequest::setCancelaEnvio()
     */
    public function __construct(?CancelaEnvioRequest $cancelaEnvio = null)
    {
        $this
            ->setCancelaEnvio($cancelaEnvio);
    }

    /**
     * Get CancelaEnvio value
     */
    public function getCancelaEnvio(): ?CancelaEnvioRequest
    {
        return $this->CancelaEnvio;
    }

    /**
     * Set CancelaEnvio value
     *
     * @return \StructType\CancelarEnvioRequest
     */
    public function setCancelaEnvio(?CancelaEnvioRequest $cancelaEnvio = null): self
    {
        $this->CancelaEnvio = $cancelaEnvio;

        return $this;
    }
}
