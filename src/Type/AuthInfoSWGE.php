<?php

namespace Kavinsky\MRW\Type;

class AuthInfoSWGE
{
    private ?string $Cliente = null;

    private ?string $Password = null;

    private ?string $Departamento = null;

    private ?string $Franquicia = null;

    private ?string $Usuario = null;

    public function getCliente(): ?string
    {
        return $this->Cliente;
    }

    public function withCliente(?string $Cliente): static
    {
        $new = clone $this;
        $new->Cliente = $Cliente;

        return $new;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function withPassword(?string $Password): static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    public function getDepartamento(): ?string
    {
        return $this->Departamento;
    }

    public function withDepartamento(?string $Departamento): static
    {
        $new = clone $this;
        $new->Departamento = $Departamento;

        return $new;
    }

    public function getFranquicia(): ?string
    {
        return $this->Franquicia;
    }

    public function withFranquicia(?string $Franquicia): static
    {
        $new = clone $this;
        $new->Franquicia = $Franquicia;

        return $new;
    }

    public function getUsuario(): ?string
    {
        return $this->Usuario;
    }

    public function withUsuario(?string $Usuario): static
    {
        $new = clone $this;
        $new->Usuario = $Usuario;

        return $new;
    }
}
