<?php

namespace Kavinsky\MRW\Type;

class ArrayOfNotificacionRequest
{
    /**
     * @var null|array<int<0, max>, NotificacionRequest>
     */
    private ?array $NotificacionRequest = null;

    /**
     * @return \Kavinsky\MRW\Type\NotificacionRequest[]|null
     */
    public function getNotificacionRequest(): ?array
    {
        return $this->NotificacionRequest;
    }

    /**
     * @param  null|array<int<0, max>, NotificacionRequest>  $NotificacionRequest
     */
    public function withNotificacionRequest(?array $NotificacionRequest): static
    {
        $new = clone $this;
        $new->NotificacionRequest = $NotificacionRequest;

        return $new;
    }
}
