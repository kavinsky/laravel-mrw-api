<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class NotificacionIntRequest extends AbstractStructBase
{
    protected ?string $TelefonoSMS = null;

    public function __construct(?string $telefonoSMS = null)
    {
        $this
            ->setTelefonoSMS($telefonoSMS);
    }

    public function getTelefonoSMS(): ?string
    {
        return $this->TelefonoSMS;
    }

    public function setTelefonoSMS(?string $telefonoSMS = null): self
    {
        // validation for constraint: string
        $this->TelefonoSMS = $telefonoSMS;

        return $this;
    }
}
