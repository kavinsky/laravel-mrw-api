<?php

namespace Kavinsky\MRW\Type;

abstract class BaseResponse
{
    /**
     * @var null | string
     */
    private ?string $Estado = null;

    /**
     * @var null | string
     */
    private ?string $Mensaje = null;

    public function getEstado() : ?string
    {
        return $this->Estado;
    }

    public function withEstado(?string $Estado) : static
    {
        $new = clone $this;
        $new->Estado = $Estado;

        return $new;
    }

    public function getMensaje() : ?string
    {
        return $this->Mensaje;
    }

    public function withMensaje(?string $Mensaje) : static
    {
        $new = clone $this;
        $new->Mensaje = $Mensaje;

        return $new;
    }
}

