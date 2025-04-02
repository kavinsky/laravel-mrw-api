<?php

namespace Kavinsky\MRW\Type;

class ArrayOfNotificacionRequest
{
    /**
     * @var null | array<int<0,max>, \Kavinsky\MRW\Type\NotificacionRequest>
     */
    private ?array $NotificacionRequest = null;

    public function getNotificacionRequest() : ?array
    {
        return $this->NotificacionRequest;
    }

    public function withNotificacionRequest(?array $NotificacionRequest) : static
    {
        $new = clone $this;
        $new->NotificacionRequest = $NotificacionRequest;

        return $new;
    }
}

