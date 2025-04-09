<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class AuthInfo extends AbstractStructBase
{
    protected ?string $CodigoFranquicia = null;

    protected ?string $CodigoAbonado = null;

    protected ?string $CodigoDepartamento = null;

    protected ?string $UserName = null;

    protected ?string $Password = null;

    public function __construct(?string $codigoFranquicia = null, ?string $codigoAbonado = null, ?string $codigoDepartamento = null, ?string $userName = null, ?string $password = null)
    {
        $this
            ->setCodigoFranquicia($codigoFranquicia)
            ->setCodigoAbonado($codigoAbonado)
            ->setCodigoDepartamento($codigoDepartamento)
            ->setUserName($userName)
            ->setPassword($password);
    }

    public function getCodigoFranquicia(): ?string
    {
        return $this->CodigoFranquicia;
    }

    public function setCodigoFranquicia(?string $codigoFranquicia = null): self
    {
        // validation for constraint: string
        $this->CodigoFranquicia = $codigoFranquicia;

        return $this;
    }

    public function getCodigoAbonado(): ?string
    {
        return $this->CodigoAbonado;
    }

    public function setCodigoAbonado(?string $codigoAbonado = null): self
    {
        // validation for constraint: string
        $this->CodigoAbonado = $codigoAbonado;

        return $this;
    }

    public function getCodigoDepartamento(): ?string
    {
        return $this->CodigoDepartamento;
    }

    public function setCodigoDepartamento(?string $codigoDepartamento = null): self
    {
        // validation for constraint: string
        $this->CodigoDepartamento = $codigoDepartamento;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->UserName;
    }

    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        $this->UserName = $userName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        $this->Password = $password;

        return $this;
    }
}
