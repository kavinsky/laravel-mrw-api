<?php

namespace Kavinsky\MRW\Type;

class PointRequest
{
    /**
     * @var null | string
     */
    private ?string $codigoPoint = null;

    public function getCodigoPoint() : ?string
    {
        return $this->codigoPoint;
    }

    public function withCodigoPoint(?string $codigoPoint) : static
    {
        $new = clone $this;
        $new->codigoPoint = $codigoPoint;

        return $new;
    }
}

