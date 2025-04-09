<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class DireccionRequest extends AbstractStructBase
{
    protected ?string $CodigoDireccion = null;

    protected ?string $CodigoTipoVia = null;

    protected ?string $Via = null;

    protected ?string $Numero = null;

    protected ?string $Resto = null;

    protected ?string $CodigoPostal = null;

    protected ?string $Poblacion = null;

    protected ?string $Provincia = null;

    protected ?string $Estado = null;

    protected ?string $CodigoPais = null;

    protected ?string $TipoPuntoEntrega = null;

    protected ?string $CodigoPuntoEntrega = null;

    protected ?string $CodigoFranquiciaAsociadaPuntoEntrega = null;

    protected ?string $TipoPuntoRecogida = null;

    protected ?string $CodigoPuntoRecogida = null;

    protected ?string $CodigoFranquiciaAsociadaPuntoRecogida = null;

    protected ?string $Agencia = null;

    public function __construct(?string $codigoDireccion = null, ?string $codigoTipoVia = null, ?string $via = null, ?string $numero = null, ?string $resto = null, ?string $codigoPostal = null, ?string $poblacion = null, ?string $provincia = null, ?string $estado = null, ?string $codigoPais = null, ?string $tipoPuntoEntrega = 'NINGUNO', ?string $codigoPuntoEntrega = '', ?string $codigoFranquiciaAsociadaPuntoEntrega = '', ?string $tipoPuntoRecogida = 'NINGUNO', ?string $codigoPuntoRecogida = '', ?string $codigoFranquiciaAsociadaPuntoRecogida = '', ?string $agencia = null)
    {
        $this
            ->setCodigoDireccion($codigoDireccion)
            ->setCodigoTipoVia($codigoTipoVia)
            ->setVia($via)
            ->setNumero($numero)
            ->setResto($resto)
            ->setCodigoPostal($codigoPostal)
            ->setPoblacion($poblacion)
            ->setProvincia($provincia)
            ->setEstado($estado)
            ->setCodigoPais($codigoPais)
            ->setTipoPuntoEntrega($tipoPuntoEntrega)
            ->setCodigoPuntoEntrega($codigoPuntoEntrega)
            ->setCodigoFranquiciaAsociadaPuntoEntrega($codigoFranquiciaAsociadaPuntoEntrega)
            ->setTipoPuntoRecogida($tipoPuntoRecogida)
            ->setCodigoPuntoRecogida($codigoPuntoRecogida)
            ->setCodigoFranquiciaAsociadaPuntoRecogida($codigoFranquiciaAsociadaPuntoRecogida)
            ->setAgencia($agencia);
    }

    public function getCodigoDireccion(): ?string
    {
        return $this->CodigoDireccion;
    }

    public function setCodigoDireccion(?string $codigoDireccion = null): self
    {
        // validation for constraint: string
        $this->CodigoDireccion = $codigoDireccion;

        return $this;
    }

    public function getCodigoTipoVia(): ?string
    {
        return $this->CodigoTipoVia;
    }

    public function setCodigoTipoVia(?string $codigoTipoVia = null): self
    {
        // validation for constraint: string
        $this->CodigoTipoVia = $codigoTipoVia;

        return $this;
    }

    public function getVia(): ?string
    {
        return $this->Via;
    }

    public function setVia(?string $via = null): self
    {
        // validation for constraint: string
        $this->Via = $via;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    public function setNumero(?string $numero = null): self
    {
        // validation for constraint: string
        $this->Numero = $numero;

        return $this;
    }

    public function getResto(): ?string
    {
        return $this->Resto;
    }

    public function setResto(?string $resto = null): self
    {
        // validation for constraint: string
        $this->Resto = $resto;

        return $this;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    public function setCodigoPostal(?string $codigoPostal = null): self
    {
        // validation for constraint: string
        $this->CodigoPostal = $codigoPostal;

        return $this;
    }

    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    public function setPoblacion(?string $poblacion = null): self
    {
        // validation for constraint: string
        $this->Poblacion = $poblacion;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }

    public function setProvincia(?string $provincia = null): self
    {
        // validation for constraint: string
        $this->Provincia = $provincia;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function setEstado(?string $estado = null): self
    {
        // validation for constraint: string
        $this->Estado = $estado;

        return $this;
    }

    public function getCodigoPais(): ?string
    {
        return $this->CodigoPais;
    }

    public function setCodigoPais(?string $codigoPais = null): self
    {
        // validation for constraint: string
        $this->CodigoPais = $codigoPais;

        return $this;
    }

    public function getTipoPuntoEntrega(): ?string
    {
        return $this->TipoPuntoEntrega;
    }

    public function setTipoPuntoEntrega(?string $tipoPuntoEntrega = 'NINGUNO'): self
    {
        // validation for constraint: string
        $this->TipoPuntoEntrega = $tipoPuntoEntrega;

        return $this;
    }

    public function getCodigoPuntoEntrega(): ?string
    {
        return $this->CodigoPuntoEntrega;
    }

    public function setCodigoPuntoEntrega(?string $codigoPuntoEntrega = ''): self
    {
        // validation for constraint: string
        $this->CodigoPuntoEntrega = $codigoPuntoEntrega;

        return $this;
    }

    public function getCodigoFranquiciaAsociadaPuntoEntrega(): ?string
    {
        return $this->CodigoFranquiciaAsociadaPuntoEntrega;
    }

    public function setCodigoFranquiciaAsociadaPuntoEntrega(?string $codigoFranquiciaAsociadaPuntoEntrega = ''): self
    {
        // validation for constraint: string
        $this->CodigoFranquiciaAsociadaPuntoEntrega = $codigoFranquiciaAsociadaPuntoEntrega;

        return $this;
    }

    public function getTipoPuntoRecogida(): ?string
    {
        return $this->TipoPuntoRecogida;
    }

    public function setTipoPuntoRecogida(?string $tipoPuntoRecogida = 'NINGUNO'): self
    {
        // validation for constraint: string
        $this->TipoPuntoRecogida = $tipoPuntoRecogida;

        return $this;
    }

    public function getCodigoPuntoRecogida(): ?string
    {
        return $this->CodigoPuntoRecogida;
    }

    public function setCodigoPuntoRecogida(?string $codigoPuntoRecogida = ''): self
    {
        // validation for constraint: string
        $this->CodigoPuntoRecogida = $codigoPuntoRecogida;

        return $this;
    }

    public function getCodigoFranquiciaAsociadaPuntoRecogida(): ?string
    {
        return $this->CodigoFranquiciaAsociadaPuntoRecogida;
    }

    public function setCodigoFranquiciaAsociadaPuntoRecogida(?string $codigoFranquiciaAsociadaPuntoRecogida = ''): self
    {
        // validation for constraint: string
        $this->CodigoFranquiciaAsociadaPuntoRecogida = $codigoFranquiciaAsociadaPuntoRecogida;

        return $this;
    }

    public function getAgencia(): ?string
    {
        return $this->Agencia;
    }

    public function setAgencia(?string $agencia = null): self
    {
        // validation for constraint: string
        $this->Agencia = $agencia;

        return $this;
    }
}
