<?php

namespace Kavinsky\MRW\Type;

class NotificacionRequest
{
    private ?string $CanalNotificacion = null;

    private ?string $TipoNotificacion = null;

    private ?string $MailSMS = null;

    public function getCanalNotificacion(): ?string
    {
        return $this->CanalNotificacion;
    }

    public function withCanalNotificacion(?string $CanalNotificacion): static
    {
        $new = clone $this;
        $new->CanalNotificacion = $CanalNotificacion;

        return $new;
    }

    public function getTipoNotificacion(): ?string
    {
        return $this->TipoNotificacion;
    }

    public function withTipoNotificacion(?string $TipoNotificacion): static
    {
        $new = clone $this;
        $new->TipoNotificacion = $TipoNotificacion;

        return $new;
    }

    public function getMailSMS(): ?string
    {
        return $this->MailSMS;
    }

    public function withMailSMS(?string $MailSMS): static
    {
        $new = clone $this;
        $new->MailSMS = $MailSMS;

        return $new;
    }
}
