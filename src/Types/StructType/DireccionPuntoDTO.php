<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DireccionPuntoDTO StructType
 */
#[AllowDynamicProperties]
class DireccionPuntoDTO extends AbstractStructBase
{
    /**
     * The Pais
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Pais = null;

    /**
     * The CodigoPostal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPostal = null;

    /**
     * The Region
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Region = null;

    /**
     * The Provincia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Provincia = null;

    /**
     * The Poblacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Poblacion = null;

    /**
     * The TipoVia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TipoVia = null;

    /**
     * The NombreVia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NombreVia = null;

    /**
     * The NumeroVia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroVia = null;

    /**
     * The Resto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Resto = null;

    /**
     * The Google
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Google = null;

    /**
     * The Zona
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Zona = null;

    /**
     * The GrupoZona
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $GrupoZona = null;

    /**
     * The Latitud
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?float $Latitud;

    /**
     * The Longitud
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?float $Longitud;

    /**
     * Constructor method for DireccionPuntoDTO
     *
     * @uses DireccionPuntoDTO::setPais()
     * @uses DireccionPuntoDTO::setCodigoPostal()
     * @uses DireccionPuntoDTO::setRegion()
     * @uses DireccionPuntoDTO::setProvincia()
     * @uses DireccionPuntoDTO::setPoblacion()
     * @uses DireccionPuntoDTO::setTipoVia()
     * @uses DireccionPuntoDTO::setNombreVia()
     * @uses DireccionPuntoDTO::setNumeroVia()
     * @uses DireccionPuntoDTO::setResto()
     * @uses DireccionPuntoDTO::setGoogle()
     * @uses DireccionPuntoDTO::setZona()
     * @uses DireccionPuntoDTO::setGrupoZona()
     * @uses DireccionPuntoDTO::setLatitud()
     * @uses DireccionPuntoDTO::setLongitud()
     */
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

    /**
     * Get Pais value
     */
    public function getPais(): ?string
    {
        return $this->Pais;
    }

    /**
     * Set Pais value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setPais(?string $pais = null): self
    {
        // validation for constraint: string
        if (! is_null($pais) && ! is_string($pais)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pais, true), gettype($pais)), __LINE__);
        }
        $this->Pais = $pais;

        return $this;
    }

    /**
     * Get CodigoPostal value
     */
    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    /**
     * Set CodigoPostal value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setCodigoPostal(?string $codigoPostal = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPostal) && ! is_string($codigoPostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPostal, true), gettype($codigoPostal)), __LINE__);
        }
        $this->CodigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get Region value
     */
    public function getRegion(): ?string
    {
        return $this->Region;
    }

    /**
     * Set Region value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setRegion(?string $region = null): self
    {
        // validation for constraint: string
        if (! is_null($region) && ! is_string($region)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region, true), gettype($region)), __LINE__);
        }
        $this->Region = $region;

        return $this;
    }

    /**
     * Get Provincia value
     */
    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }

    /**
     * Set Provincia value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setProvincia(?string $provincia = null): self
    {
        // validation for constraint: string
        if (! is_null($provincia) && ! is_string($provincia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provincia, true), gettype($provincia)), __LINE__);
        }
        $this->Provincia = $provincia;

        return $this;
    }

    /**
     * Get Poblacion value
     */
    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    /**
     * Set Poblacion value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setPoblacion(?string $poblacion = null): self
    {
        // validation for constraint: string
        if (! is_null($poblacion) && ! is_string($poblacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($poblacion, true), gettype($poblacion)), __LINE__);
        }
        $this->Poblacion = $poblacion;

        return $this;
    }

    /**
     * Get TipoVia value
     */
    public function getTipoVia(): ?string
    {
        return $this->TipoVia;
    }

    /**
     * Set TipoVia value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setTipoVia(?string $tipoVia = null): self
    {
        // validation for constraint: string
        if (! is_null($tipoVia) && ! is_string($tipoVia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoVia, true), gettype($tipoVia)), __LINE__);
        }
        $this->TipoVia = $tipoVia;

        return $this;
    }

    /**
     * Get NombreVia value
     */
    public function getNombreVia(): ?string
    {
        return $this->NombreVia;
    }

    /**
     * Set NombreVia value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setNombreVia(?string $nombreVia = null): self
    {
        // validation for constraint: string
        if (! is_null($nombreVia) && ! is_string($nombreVia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreVia, true), gettype($nombreVia)), __LINE__);
        }
        $this->NombreVia = $nombreVia;

        return $this;
    }

    /**
     * Get NumeroVia value
     */
    public function getNumeroVia(): ?string
    {
        return $this->NumeroVia;
    }

    /**
     * Set NumeroVia value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setNumeroVia(?string $numeroVia = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroVia) && ! is_string($numeroVia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroVia, true), gettype($numeroVia)), __LINE__);
        }
        $this->NumeroVia = $numeroVia;

        return $this;
    }

    /**
     * Get Resto value
     */
    public function getResto(): ?string
    {
        return $this->Resto;
    }

    /**
     * Set Resto value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setResto(?string $resto = null): self
    {
        // validation for constraint: string
        if (! is_null($resto) && ! is_string($resto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resto, true), gettype($resto)), __LINE__);
        }
        $this->Resto = $resto;

        return $this;
    }

    /**
     * Get Google value
     */
    public function getGoogle(): ?string
    {
        return $this->Google;
    }

    /**
     * Set Google value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setGoogle(?string $google = null): self
    {
        // validation for constraint: string
        if (! is_null($google) && ! is_string($google)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($google, true), gettype($google)), __LINE__);
        }
        $this->Google = $google;

        return $this;
    }

    /**
     * Get Zona value
     */
    public function getZona(): ?string
    {
        return $this->Zona;
    }

    /**
     * Set Zona value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setZona(?string $zona = null): self
    {
        // validation for constraint: string
        if (! is_null($zona) && ! is_string($zona)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zona, true), gettype($zona)), __LINE__);
        }
        $this->Zona = $zona;

        return $this;
    }

    /**
     * Get GrupoZona value
     */
    public function getGrupoZona(): ?string
    {
        return $this->GrupoZona;
    }

    /**
     * Set GrupoZona value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setGrupoZona(?string $grupoZona = null): self
    {
        // validation for constraint: string
        if (! is_null($grupoZona) && ! is_string($grupoZona)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($grupoZona, true), gettype($grupoZona)), __LINE__);
        }
        $this->GrupoZona = $grupoZona;

        return $this;
    }

    /**
     * Get Latitud value
     */
    public function getLatitud(): ?float
    {
        return $this->Latitud;
    }

    /**
     * Set Latitud value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setLatitud(?float $latitud): self
    {
        // validation for constraint: float
        if (! is_null($latitud) && (! is_float($latitud) && ! is_numeric($latitud))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitud, true), gettype($latitud)), __LINE__);
        }
        $this->Latitud = $latitud;

        return $this;
    }

    /**
     * Get Longitud value
     */
    public function getLongitud(): ?float
    {
        return $this->Longitud;
    }

    /**
     * Set Longitud value
     *
     * @return \StructType\DireccionPuntoDTO
     */
    public function setLongitud(?float $longitud): self
    {
        // validation for constraint: float
        if (! is_null($longitud) && (! is_float($longitud) && ! is_numeric($longitud))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitud, true), gettype($longitud)), __LINE__);
        }
        $this->Longitud = $longitud;

        return $this;
    }
}
