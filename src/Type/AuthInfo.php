<?php

namespace Kavinsky\MRW\Type;

class AuthInfo
{
    /**
     * @var null | string
     */
    private ?string $CodigoFranquicia = null;

    /**
     * @var null | string
     */
    private ?string $CodigoAbonado = null;

    /**
     * @var null | string
     */
    private ?string $CodigoDepartamento = null;

    /**
     * @var null | string
     */
    private ?string $UserName = null;

    /**
     * @var null | string
     */
    private ?string $Password = null;

    public function getCodigoFranquicia() : ?string
    {
        return $this->CodigoFranquicia;
    }

    public function withCodigoFranquicia(?string $CodigoFranquicia) : static
    {
        $new = clone $this;
        $new->CodigoFranquicia = $CodigoFranquicia;

        return $new;
    }

    public function getCodigoAbonado() : ?string
    {
        return $this->CodigoAbonado;
    }

    public function withCodigoAbonado(?string $CodigoAbonado) : static
    {
        $new = clone $this;
        $new->CodigoAbonado = $CodigoAbonado;

        return $new;
    }

    public function getCodigoDepartamento() : ?string
    {
        return $this->CodigoDepartamento;
    }

    public function withCodigoDepartamento(?string $CodigoDepartamento) : static
    {
        $new = clone $this;
        $new->CodigoDepartamento = $CodigoDepartamento;

        return $new;
    }

    public function getUserName() : ?string
    {
        return $this->UserName;
    }

    public function withUserName(?string $UserName) : static
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    public function getPassword() : ?string
    {
        return $this->Password;
    }

    public function withPassword(?string $Password) : static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }
}

