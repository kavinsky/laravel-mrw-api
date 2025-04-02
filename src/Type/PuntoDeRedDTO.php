<?php

namespace Kavinsky\MRW\Type;

class PuntoDeRedDTO
{
    /**
     * @var null | string
     */
    private ?string $Codigo = null;

    /**
     * @var null | string
     */
    private ?string $Tipo = null;

    /**
     * @var null | string
     */
    private ?string $Nombre = null;

    /**
     * @var null | \Kavinsky\MRW\Type\CodigoPointDTO
     */
    private ?\Kavinsky\MRW\Type\CodigoPointDTO $CodigoPuntoVinculado = null;

    /**
     * @var null | \Kavinsky\MRW\Type\DireccionPuntoDTO
     */
    private ?\Kavinsky\MRW\Type\DireccionPuntoDTO $Direccion = null;

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

    public function getNombre() : ?string
    {
        return $this->Nombre;
    }

    public function withNombre(?string $Nombre) : static
    {
        $new = clone $this;
        $new->Nombre = $Nombre;

        return $new;
    }

    public function getCodigoPuntoVinculado() : ?\Kavinsky\MRW\Type\CodigoPointDTO
    {
        return $this->CodigoPuntoVinculado;
    }

    public function withCodigoPuntoVinculado(?\Kavinsky\MRW\Type\CodigoPointDTO $CodigoPuntoVinculado) : static
    {
        $new = clone $this;
        $new->CodigoPuntoVinculado = $CodigoPuntoVinculado;

        return $new;
    }

    public function getDireccion() : ?\Kavinsky\MRW\Type\DireccionPuntoDTO
    {
        return $this->Direccion;
    }

    public function withDireccion(?\Kavinsky\MRW\Type\DireccionPuntoDTO $Direccion) : static
    {
        $new = clone $this;
        $new->Direccion = $Direccion;

        return $new;
    }
}

