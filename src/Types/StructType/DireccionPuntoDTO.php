<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class DireccionPuntoDTO extends AbstractStructBase
{
    protected ?string $Pais = null;

    protected ?string $CodigoPostal = null;

    protected ?string $Region = null;

    protected ?string $Provincia = null;

    protected ?string $Poblacion = null;

    protected ?string $TipoVia = null;

    protected ?string $NombreVia = null;

    protected ?string $NumeroVia = null;

    protected ?string $Resto = null;

    protected ?string $Google = null;

    protected ?string $Zona = null;

    protected ?string $GrupoZona = null;

    protected ?float $Latitud;

    protected ?float $Longitud;

    public function __construct(?string $pais, ?string $codigoPostal, ?string $region, ?string $provincia, ?string $poblacion, ?string $tipoVia, ?string $nombreVia, ?string $numeroVia, ?string $resto, ?string $google, ?string $zona, ?string $grupoZona, ?float $latitud, ?float $longitud)
    {
        $this
            ->setPais($pais)
            ->setCodigoPostal($codigoPostal)
            ->setRegion($region)
            ->setProvincia($provincia)
            ->setPoblacion($poblacion)
            ->setTipoVia($tipoVia)
            ->setNombreVia($nombreVia)
            ->setNumeroVia($numeroVia)
            ->setResto($resto)
            ->setGoogle($google)
            ->setZona($zona)
            ->setGrupoZona($grupoZona)
            ->setLatitud($latitud)
            ->setLongitud($longitud);
    }

    public function getPais(): ?string
    {
        return $this->Pais;
    }

    public function setPais(?string $pais = null): self
    {
        // validation for constraint: string
        $this->Pais = $pais;

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

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(?string $region = null): self
    {
        // validation for constraint: string
        $this->Region = $region;

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

    public function getTipoVia(): ?string
    {
        return $this->TipoVia;
    }

    public function setTipoVia(?string $tipoVia = null): self
    {
        // validation for constraint: string
        $this->TipoVia = $tipoVia;

        return $this;
    }

    public function getNombreVia(): ?string
    {
        return $this->NombreVia;
    }

    public function setNombreVia(?string $nombreVia = null): self
    {
        // validation for constraint: string
        $this->NombreVia = $nombreVia;

        return $this;
    }

    public function getNumeroVia(): ?string
    {
        return $this->NumeroVia;
    }

    public function setNumeroVia(?string $numeroVia = null): self
    {
        // validation for constraint: string
        $this->NumeroVia = $numeroVia;

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

    public function getGoogle(): ?string
    {
        return $this->Google;
    }

    public function setGoogle(?string $google = null): self
    {
        // validation for constraint: string
        $this->Google = $google;

        return $this;
    }

    public function getZona(): ?string
    {
        return $this->Zona;
    }

    public function setZona(?string $zona = null): self
    {
        // validation for constraint: string
        $this->Zona = $zona;

        return $this;
    }

    public function getGrupoZona(): ?string
    {
        return $this->GrupoZona;
    }

    public function setGrupoZona(?string $grupoZona = null): self
    {
        // validation for constraint: string
        $this->GrupoZona = $grupoZona;

        return $this;
    }

    public function getLatitud(): ?float
    {
        return $this->Latitud;
    }

    public function setLatitud(?float $latitud): self
    {
        $this->Latitud = $latitud;

        return $this;
    }

    public function getLongitud(): ?float
    {
        return $this->Longitud;
    }

    public function setLongitud(?float $longitud): self
    {
        $this->Longitud = $longitud;

        return $this;
    }
}
