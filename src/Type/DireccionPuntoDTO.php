<?php

namespace Kavinsky\MRW\Type;

class DireccionPuntoDTO
{
    /**
     * @var null | string
     */
    private ?string $Pais = null;

    /**
     * @var null | string
     */
    private ?string $CodigoPostal = null;

    /**
     * @var null | string
     */
    private ?string $Region = null;

    /**
     * @var null | string
     */
    private ?string $Provincia = null;

    /**
     * @var null | string
     */
    private ?string $Poblacion = null;

    /**
     * @var null | string
     */
    private ?string $TipoVia = null;

    /**
     * @var null | string
     */
    private ?string $NombreVia = null;

    /**
     * @var null | string
     */
    private ?string $NumeroVia = null;

    /**
     * @var null | string
     */
    private ?string $Resto = null;

    /**
     * @var null | string
     */
    private ?string $Google = null;

    /**
     * @var null | float
     */
    private ?float $Latitud = null;

    /**
     * @var null | float
     */
    private ?float $Longitud = null;

    /**
     * @var null | string
     */
    private ?string $Zona = null;

    /**
     * @var null | string
     */
    private ?string $GrupoZona = null;

    public function getPais() : ?string
    {
        return $this->Pais;
    }

    public function withPais(?string $Pais) : static
    {
        $new = clone $this;
        $new->Pais = $Pais;

        return $new;
    }

    public function getCodigoPostal() : ?string
    {
        return $this->CodigoPostal;
    }

    public function withCodigoPostal(?string $CodigoPostal) : static
    {
        $new = clone $this;
        $new->CodigoPostal = $CodigoPostal;

        return $new;
    }

    public function getRegion() : ?string
    {
        return $this->Region;
    }

    public function withRegion(?string $Region) : static
    {
        $new = clone $this;
        $new->Region = $Region;

        return $new;
    }

    public function getProvincia() : ?string
    {
        return $this->Provincia;
    }

    public function withProvincia(?string $Provincia) : static
    {
        $new = clone $this;
        $new->Provincia = $Provincia;

        return $new;
    }

    public function getPoblacion() : ?string
    {
        return $this->Poblacion;
    }

    public function withPoblacion(?string $Poblacion) : static
    {
        $new = clone $this;
        $new->Poblacion = $Poblacion;

        return $new;
    }

    public function getTipoVia() : ?string
    {
        return $this->TipoVia;
    }

    public function withTipoVia(?string $TipoVia) : static
    {
        $new = clone $this;
        $new->TipoVia = $TipoVia;

        return $new;
    }

    public function getNombreVia() : ?string
    {
        return $this->NombreVia;
    }

    public function withNombreVia(?string $NombreVia) : static
    {
        $new = clone $this;
        $new->NombreVia = $NombreVia;

        return $new;
    }

    public function getNumeroVia() : ?string
    {
        return $this->NumeroVia;
    }

    public function withNumeroVia(?string $NumeroVia) : static
    {
        $new = clone $this;
        $new->NumeroVia = $NumeroVia;

        return $new;
    }

    public function getResto() : ?string
    {
        return $this->Resto;
    }

    public function withResto(?string $Resto) : static
    {
        $new = clone $this;
        $new->Resto = $Resto;

        return $new;
    }

    public function getGoogle() : ?string
    {
        return $this->Google;
    }

    public function withGoogle(?string $Google) : static
    {
        $new = clone $this;
        $new->Google = $Google;

        return $new;
    }

    public function getLatitud() : ?float
    {
        return $this->Latitud;
    }

    public function withLatitud(?float $Latitud) : static
    {
        $new = clone $this;
        $new->Latitud = $Latitud;

        return $new;
    }

    public function getLongitud() : ?float
    {
        return $this->Longitud;
    }

    public function withLongitud(?float $Longitud) : static
    {
        $new = clone $this;
        $new->Longitud = $Longitud;

        return $new;
    }

    public function getZona() : ?string
    {
        return $this->Zona;
    }

    public function withZona(?string $Zona) : static
    {
        $new = clone $this;
        $new->Zona = $Zona;

        return $new;
    }

    public function getGrupoZona() : ?string
    {
        return $this->GrupoZona;
    }

    public function withGrupoZona(?string $GrupoZona) : static
    {
        $new = clone $this;
        $new->GrupoZona = $GrupoZona;

        return $new;
    }
}

