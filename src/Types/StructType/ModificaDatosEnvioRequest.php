<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModificaDatosEnvioRequest StructType
 */
#[AllowDynamicProperties]
class ModificaDatosEnvioRequest extends AbstractStructBase
{
    /**
     * The NumeroEnvioOriginal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroEnvioOriginal = null;

    /**
     * Constructor method for ModificaDatosEnvioRequest
     *
     * @uses ModificaDatosEnvioRequest::setNumeroEnvioOriginal()
     */
    public function __construct(?string $numeroEnvioOriginal = null)
    {
        $this
            ->setNumeroEnvioOriginal($numeroEnvioOriginal);
    }

    /**
     * Get NumeroEnvioOriginal value
     */
    public function getNumeroEnvioOriginal(): ?string
    {
        return $this->NumeroEnvioOriginal;
    }

    /**
     * Set NumeroEnvioOriginal value
     *
     * @return \StructType\ModificaDatosEnvioRequest
     */
    public function setNumeroEnvioOriginal(?string $numeroEnvioOriginal = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroEnvioOriginal) && ! is_string($numeroEnvioOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroEnvioOriginal, true), gettype($numeroEnvioOriginal)), __LINE__);
        }
        $this->NumeroEnvioOriginal = $numeroEnvioOriginal;

        return $this;
    }
}
