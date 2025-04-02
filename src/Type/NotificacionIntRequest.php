<?php

namespace Kavinsky\MRW\Type;

class NotificacionIntRequest
{
    /**
     * @var null | string
     */
    private ?string $TelefonoSMS = null;

    public function getTelefonoSMS() : ?string
    {
        return $this->TelefonoSMS;
    }

    public function withTelefonoSMS(?string $TelefonoSMS) : static
    {
        $new = clone $this;
        $new->TelefonoSMS = $TelefonoSMS;

        return $new;
    }
}

