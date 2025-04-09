<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificacionIntRequest StructType
 */
#[AllowDynamicProperties]
class NotificacionIntRequest extends AbstractStructBase
{
    /**
     * The TelefonoSMS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TelefonoSMS = null;

    /**
     * Constructor method for NotificacionIntRequest
     *
     * @uses NotificacionIntRequest::setTelefonoSMS()
     */
    public function __construct(?string $telefonoSMS = null)
    {
        $this
            ->setTelefonoSMS($telefonoSMS);
    }

    /**
     * Get TelefonoSMS value
     */
    public function getTelefonoSMS(): ?string
    {
        return $this->TelefonoSMS;
    }

    /**
     * Set TelefonoSMS value
     *
     * @return \StructType\NotificacionIntRequest
     */
    public function setTelefonoSMS(?string $telefonoSMS = null): self
    {
        // validation for constraint: string
        if (! is_null($telefonoSMS) && ! is_string($telefonoSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefonoSMS, true), gettype($telefonoSMS)), __LINE__);
        }
        $this->TelefonoSMS = $telefonoSMS;

        return $this;
    }
}
