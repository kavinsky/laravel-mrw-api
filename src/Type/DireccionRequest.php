<?php

namespace Kavinsky\MRW\Type;

class DireccionRequest
{
    private ?string $CodigoDireccion = null;

    private ?string $CodigoTipoVia = null;

    private ?string $Via = null;

    private ?string $Numero = null;

    private ?string $Resto = null;

    private ?string $CodigoPostal = null;

    private ?string $Poblacion = null;

    private ?string $Provincia = null;

    private ?string $Estado = null;

    private ?string $CodigoPais = null;

    private ?string $TipoPuntoEntrega = null;

    private ?string $CodigoPuntoEntrega = null;

    private ?string $CodigoFranquiciaAsociadaPuntoEntrega = null;

    private ?string $TipoPuntoRecogida = null;

    private ?string $CodigoPuntoRecogida = null;

    private ?string $CodigoFranquiciaAsociadaPuntoRecogida = null;

    private ?string $Agencia = null;

    public function getCodigoDireccion(): ?string
    {
        return $this->CodigoDireccion;
    }

    public function withCodigoDireccion(?string $CodigoDireccion): static
    {
        $new = clone $this;
        $new->CodigoDireccion = $CodigoDireccion;

        return $new;
    }

    public function getCodigoTipoVia(): ?string
    {
        return $this->CodigoTipoVia;
    }

    public function withCodigoTipoVia(?string $CodigoTipoVia): static
    {
        $new = clone $this;
        $new->CodigoTipoVia = $CodigoTipoVia;

        return $new;
    }

    public function getVia(): ?string
    {
        return $this->Via;
    }

    public function withVia(?string $Via): static
    {
        $new = clone $this;
        $new->Via = $Via;

        return $new;
    }

    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    public function withNumero(?string $Numero): static
    {
        $new = clone $this;
        $new->Numero = $Numero;

        return $new;
    }

    public function getResto(): ?string
    {
        return $this->Resto;
    }

    public function withResto(?string $Resto): static
    {
        $new = clone $this;
        $new->Resto = $Resto;

        return $new;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    public function withCodigoPostal(?string $CodigoPostal): static
    {
        $new = clone $this;
        $new->CodigoPostal = $CodigoPostal;

        return $new;
    }

    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    public function withPoblacion(?string $Poblacion): static
    {
        $new = clone $this;
        $new->Poblacion = $Poblacion;

        return $new;
    }

    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }

    public function withProvincia(?string $Provincia): static
    {
        $new = clone $this;
        $new->Provincia = $Provincia;

        return $new;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function withEstado(?string $Estado): static
    {
        $new = clone $this;
        $new->Estado = $Estado;

        return $new;
    }

    public function getCodigoPais(): ?string
    {
        return $this->CodigoPais;
    }

    public function withCodigoPais(?string $CodigoPais): static
    {
        $new = clone $this;
        $new->CodigoPais = $CodigoPais;

        return $new;
    }

    public function getTipoPuntoEntrega(): ?string
    {
        return $this->TipoPuntoEntrega;
    }

    public function withTipoPuntoEntrega(?string $TipoPuntoEntrega): static
    {
        $new = clone $this;
        $new->TipoPuntoEntrega = $TipoPuntoEntrega;

        return $new;
    }

    public function getCodigoPuntoEntrega(): ?string
    {
        return $this->CodigoPuntoEntrega;
    }

    public function withCodigoPuntoEntrega(?string $CodigoPuntoEntrega): static
    {
        $new = clone $this;
        $new->CodigoPuntoEntrega = $CodigoPuntoEntrega;

        return $new;
    }

    public function getCodigoFranquiciaAsociadaPuntoEntrega(): ?string
    {
        return $this->CodigoFranquiciaAsociadaPuntoEntrega;
    }

    public function withCodigoFranquiciaAsociadaPuntoEntrega(?string $CodigoFranquiciaAsociadaPuntoEntrega): static
    {
        $new = clone $this;
        $new->CodigoFranquiciaAsociadaPuntoEntrega = $CodigoFranquiciaAsociadaPuntoEntrega;

        return $new;
    }

    public function getTipoPuntoRecogida(): ?string
    {
        return $this->TipoPuntoRecogida;
    }

    public function withTipoPuntoRecogida(?string $TipoPuntoRecogida): static
    {
        $new = clone $this;
        $new->TipoPuntoRecogida = $TipoPuntoRecogida;

        return $new;
    }

    public function getCodigoPuntoRecogida(): ?string
    {
        return $this->CodigoPuntoRecogida;
    }

    public function withCodigoPuntoRecogida(?string $CodigoPuntoRecogida): static
    {
        $new = clone $this;
        $new->CodigoPuntoRecogida = $CodigoPuntoRecogida;

        return $new;
    }

    public function getCodigoFranquiciaAsociadaPuntoRecogida(): ?string
    {
        return $this->CodigoFranquiciaAsociadaPuntoRecogida;
    }

    public function withCodigoFranquiciaAsociadaPuntoRecogida(?string $CodigoFranquiciaAsociadaPuntoRecogida): static
    {
        $new = clone $this;
        $new->CodigoFranquiciaAsociadaPuntoRecogida = $CodigoFranquiciaAsociadaPuntoRecogida;

        return $new;
    }

    public function getAgencia(): ?string
    {
        return $this->Agencia;
    }

    public function withAgencia(?string $Agencia): static
    {
        $new = clone $this;
        $new->Agencia = $Agencia;

        return $new;
    }
}
