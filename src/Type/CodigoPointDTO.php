<?php

namespace Kavinsky\MRW\Type;

class CodigoPointDTO
{
    /**
     * @var null | string
     */
    private ?string $Codigo = null;

    /**
     * @var null | string
     */
    private ?string $Tipo = null;

    public function getCodigo() : ?string
    {
        return $this->Codigo;
    }

    public function withCodigo(?string $Codigo) : static
    {
        $new = clone $this;
        $new->Codigo = $Codigo;

        return $new;
    }

    public function getTipo() : ?string
    {
        return $this->Tipo;
    }

    public function withTipo(?string $Tipo) : static
    {
        $new = clone $this;
        $new->Tipo = $Tipo;

        return $new;
    }
}

