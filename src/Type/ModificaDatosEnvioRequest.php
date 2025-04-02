<?php

namespace Kavinsky\MRW\Type;

class ModificaDatosEnvioRequest
{
    /**
     * @var null | string
     */
    private ?string $NumeroEnvioOriginal = null;

    public function getNumeroEnvioOriginal() : ?string
    {
        return $this->NumeroEnvioOriginal;
    }

    public function withNumeroEnvioOriginal(?string $NumeroEnvioOriginal) : static
    {
        $new = clone $this;
        $new->NumeroEnvioOriginal = $NumeroEnvioOriginal;

        return $new;
    }
}

