<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class AuthInfoSWGE extends AbstractStructBase
{
    protected ?string $Cliente = null;

    protected ?string $Password = null;

    protected ?string $Departamento = null;

    protected ?string $Franquicia = null;

    protected ?string $Usuario = null;

    public function __construct(?string $cliente = null, ?string $password = null, ?string $departamento = null, ?string $franquicia = null, ?string $usuario = null)
    {
        $this
            ->setCliente($cliente)
            ->setPassword($password)
            ->setDepartamento($departamento)
            ->setFranquicia($franquicia)
            ->setUsuario($usuario);
    }

    public function getCliente(): ?string
    {
        return $this->Cliente;
    }

    public function setCliente(?string $cliente = null): self
    {
        // validation for constraint: string
        $this->Cliente = $cliente;

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

    public function getDepartamento(): ?string
    {
        return $this->Departamento;
    }

    public function setDepartamento(?string $departamento = null): self
    {
        // validation for constraint: string
        $this->Departamento = $departamento;

        return $this;
    }

    public function getFranquicia(): ?string
    {
        return $this->Franquicia;
    }

    public function setFranquicia(?string $franquicia = null): self
    {
        // validation for constraint: string
        $this->Franquicia = $franquicia;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->Usuario;
    }

    public function setUsuario(?string $usuario = null): self
    {
        // validation for constraint: string
        $this->Usuario = $usuario;

        return $this;
    }
}
