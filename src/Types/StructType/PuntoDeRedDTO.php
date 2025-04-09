<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PuntoDeRedDTO StructType
 */
#[AllowDynamicProperties]
class PuntoDeRedDTO extends AbstractStructBase
{
    /**
     * The Codigo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Codigo = null;

    /**
     * The Tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Tipo = null;

    /**
     * The Nombre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Nombre = null;

    /**
     * The CodigoPuntoVinculado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CodigoPointDTO $CodigoPuntoVinculado = null;

    /**
     * The Direccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DireccionPuntoDTO $Direccion = null;

    /**
     * Constructor method for PuntoDeRedDTO
     *
     * @uses PuntoDeRedDTO::setCodigo()
     * @uses PuntoDeRedDTO::setTipo()
     * @uses PuntoDeRedDTO::setNombre()
     * @uses PuntoDeRedDTO::setCodigoPuntoVinculado()
     * @uses PuntoDeRedDTO::setDireccion()
     */
    public function __construct(?string $codigo = null, ?string $tipo = null, ?string $nombre = null, ?CodigoPointDTO $codigoPuntoVinculado = null, ?DireccionPuntoDTO $direccion = null)
    {
        $this
            ->setCodigo($codigo)
            ->setTipo($tipo)
            ->setNombre($nombre)
            ->setCodigoPuntoVinculado($codigoPuntoVinculado)
            ->setDireccion($direccion);
    }

    /**
     * Get Codigo value
     */
    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    /**
     * Set Codigo value
     *
     * @return \StructType\PuntoDeRedDTO
     */
    public function setCodigo(?string $codigo = null): self
    {
        // validation for constraint: string
        if (! is_null($codigo) && ! is_string($codigo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigo, true), gettype($codigo)), __LINE__);
        }
        $this->Codigo = $codigo;

        return $this;
    }

    /**
     * Get Tipo value
     */
    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    /**
     * Set Tipo value
     *
     * @return \StructType\PuntoDeRedDTO
     */
    public function setTipo(?string $tipo = null): self
    {
        // validation for constraint: string
        if (! is_null($tipo) && ! is_string($tipo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipo, true), gettype($tipo)), __LINE__);
        }
        $this->Tipo = $tipo;

        return $this;
    }

    /**
     * Get Nombre value
     */
    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    /**
     * Set Nombre value
     *
     * @return \StructType\PuntoDeRedDTO
     */
    public function setNombre(?string $nombre = null): self
    {
        // validation for constraint: string
        if (! is_null($nombre) && ! is_string($nombre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombre, true), gettype($nombre)), __LINE__);
        }
        $this->Nombre = $nombre;

        return $this;
    }

    /**
     * Get CodigoPuntoVinculado value
     */
    public function getCodigoPuntoVinculado(): ?CodigoPointDTO
    {
        return $this->CodigoPuntoVinculado;
    }

    /**
     * Set CodigoPuntoVinculado value
     *
     * @return \StructType\PuntoDeRedDTO
     */
    public function setCodigoPuntoVinculado(?CodigoPointDTO $codigoPuntoVinculado = null): self
    {
        $this->CodigoPuntoVinculado = $codigoPuntoVinculado;

        return $this;
    }

    /**
     * Get Direccion value
     */
    public function getDireccion(): ?DireccionPuntoDTO
    {
        return $this->Direccion;
    }

    /**
     * Set Direccion value
     *
     * @return \StructType\PuntoDeRedDTO
     */
    public function setDireccion(?DireccionPuntoDTO $direccion = null): self
    {
        $this->Direccion = $direccion;

        return $this;
    }
}
