<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosDestinatarioIntRequest StructType
 */
#[AllowDynamicProperties]
class DatosDestinatarioIntRequest extends AbstractStructBase
{
    /**
     * The Direccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DireccionIntRequest $Direccion = null;

    /**
     * The Nif
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Nif = null;

    /**
     * The Nombre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Nombre = null;

    /**
     * The Telefono
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Telefono = null;

    /**
     * The ALaAtencionDe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ALaAtencionDe = null;

    /**
     * Constructor method for DatosDestinatarioIntRequest
     *
     * @uses DatosDestinatarioIntRequest::setDireccion()
     * @uses DatosDestinatarioIntRequest::setNif()
     * @uses DatosDestinatarioIntRequest::setNombre()
     * @uses DatosDestinatarioIntRequest::setTelefono()
     * @uses DatosDestinatarioIntRequest::setALaAtencionDe()
     */
    public function __construct(?DireccionIntRequest $direccion = null, ?string $nif = null, ?string $nombre = null, ?string $telefono = null, ?string $aLaAtencionDe = null)
    {
        $this
            ->setDireccion($direccion)
            ->setNif($nif)
            ->setNombre($nombre)
            ->setTelefono($telefono)
            ->setALaAtencionDe($aLaAtencionDe);
    }

    /**
     * Get Direccion value
     */
    public function getDireccion(): ?DireccionIntRequest
    {
        return $this->Direccion;
    }

    /**
     * Set Direccion value
     *
     * @return \StructType\DatosDestinatarioIntRequest
     */
    public function setDireccion(?DireccionIntRequest $direccion = null): self
    {
        $this->Direccion = $direccion;

        return $this;
    }

    /**
     * Get Nif value
     */
    public function getNif(): ?string
    {
        return $this->Nif;
    }

    /**
     * Set Nif value
     *
     * @return \StructType\DatosDestinatarioIntRequest
     */
    public function setNif(?string $nif = null): self
    {
        // validation for constraint: string
        if (! is_null($nif) && ! is_string($nif)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        $this->Nif = $nif;

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
     * @return \StructType\DatosDestinatarioIntRequest
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
     * Get Telefono value
     */
    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    /**
     * Set Telefono value
     *
     * @return \StructType\DatosDestinatarioIntRequest
     */
    public function setTelefono(?string $telefono = null): self
    {
        // validation for constraint: string
        if (! is_null($telefono) && ! is_string($telefono)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefono, true), gettype($telefono)), __LINE__);
        }
        $this->Telefono = $telefono;

        return $this;
    }

    /**
     * Get ALaAtencionDe value
     */
    public function getALaAtencionDe(): ?string
    {
        return $this->ALaAtencionDe;
    }

    /**
     * Set ALaAtencionDe value
     *
     * @return \StructType\DatosDestinatarioIntRequest
     */
    public function setALaAtencionDe(?string $aLaAtencionDe = null): self
    {
        // validation for constraint: string
        if (! is_null($aLaAtencionDe) && ! is_string($aLaAtencionDe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aLaAtencionDe, true), gettype($aLaAtencionDe)), __LINE__);
        }
        $this->ALaAtencionDe = $aLaAtencionDe;

        return $this;
    }
}
