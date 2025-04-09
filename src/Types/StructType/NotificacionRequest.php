<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class NotificacionRequest extends AbstractStructBase
{
    protected ?string $CanalNotificacion = null;

    protected ?string $TipoNotificacion = null;

    protected ?string $MailSMS = null;

    public function __construct(?string $canalNotificacion = null, ?string $tipoNotificacion = null, ?string $mailSMS = null)
    {
        $this
            ->setCanalNotificacion($canalNotificacion)
            ->setTipoNotificacion($tipoNotificacion)
            ->setMailSMS($mailSMS);
    }

    public function getCanalNotificacion(): ?string
    {
        return $this->CanalNotificacion;
    }

    public function setCanalNotificacion(?string $canalNotificacion = null): self
    {
        // validation for constraint: string
        $this->CanalNotificacion = $canalNotificacion;

        return $this;
    }

    public function getTipoNotificacion(): ?string
    {
        return $this->TipoNotificacion;
    }

    public function setTipoNotificacion(?string $tipoNotificacion = null): self
    {
        // validation for constraint: string
        $this->TipoNotificacion = $tipoNotificacion;

        return $this;
    }

    public function getMailSMS(): ?string
    {
        return $this->MailSMS;
    }

    public function setMailSMS(?string $mailSMS = null): self
    {
        // validation for constraint: string
        $this->MailSMS = $mailSMS;

        return $this;
    }
}
