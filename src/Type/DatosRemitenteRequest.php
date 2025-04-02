<?php

namespace Kavinsky\MRW\Type;

class DatosRemitenteRequest
{
    /**
     * @var null | \Kavinsky\MRW\Type\DireccionRequest
     */
    private ?\Kavinsky\MRW\Type\DireccionRequest $Direccion = null;

    /**
     * @var null | string
     */
    private ?string $Nif = null;

    /**
     * @var null | string
     */
    private ?string $Nombre = null;

    /**
     * @var null | string
     */
    private ?string $Telefono = null;

    /**
     * @var null | string
     */
    private ?string $Contacto = null;

    /**
     * @var null | \Kavinsky\MRW\Type\HorarioRequest
     */
    private ?\Kavinsky\MRW\Type\HorarioRequest $Horario = null;

    /**
     * @var null | string
     */
    private ?string $Observaciones = null;

    public function getDireccion() : ?\Kavinsky\MRW\Type\DireccionRequest
    {
        return $this->Direccion;
    }

    public function withDireccion(?\Kavinsky\MRW\Type\DireccionRequest $Direccion) : static
    {
        $new = clone $this;
        $new->Direccion = $Direccion;

        return $new;
    }

    public function getNif() : ?string
    {
        return $this->Nif;
    }

    public function withNif(?string $Nif) : static
    {
        $new = clone $this;
        $new->Nif = $Nif;

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

    public function getTelefono() : ?string
    {
        return $this->Telefono;
    }

    public function withTelefono(?string $Telefono) : static
    {
        $new = clone $this;
        $new->Telefono = $Telefono;

        return $new;
    }

    public function getContacto() : ?string
    {
        return $this->Contacto;
    }

    public function withContacto(?string $Contacto) : static
    {
        $new = clone $this;
        $new->Contacto = $Contacto;

        return $new;
    }

    public function getHorario() : ?\Kavinsky\MRW\Type\HorarioRequest
    {
        return $this->Horario;
    }

    public function withHorario(?\Kavinsky\MRW\Type\HorarioRequest $Horario) : static
    {
        $new = clone $this;
        $new->Horario = $Horario;

        return $new;
    }

    public function getObservaciones() : ?string
    {
        return $this->Observaciones;
    }

    public function withObservaciones(?string $Observaciones) : static
    {
        $new = clone $this;
        $new->Observaciones = $Observaciones;

        return $new;
    }
}

