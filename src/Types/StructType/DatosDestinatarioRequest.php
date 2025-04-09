<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosDestinatarioRequest StructType
 */
#[AllowDynamicProperties]
class DatosDestinatarioRequest extends AbstractStructBase
{
    /**
     * The Direccion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DireccionRequest $Direccion = null;

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
     * The Contacto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Contacto = null;

    /**
     * The ALaAtencionDe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ALaAtencionDe = null;

    /**
     * The Horario
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?HorarioRequest $Horario = null;

    /**
     * The Observaciones
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Observaciones = null;

    /**
     * Constructor method for DatosDestinatarioRequest
     *
     * @uses DatosDestinatarioRequest::setDireccion()
     * @uses DatosDestinatarioRequest::setNif()
     * @uses DatosDestinatarioRequest::setNombre()
     * @uses DatosDestinatarioRequest::setTelefono()
     * @uses DatosDestinatarioRequest::setContacto()
     * @uses DatosDestinatarioRequest::setALaAtencionDe()
     * @uses DatosDestinatarioRequest::setHorario()
     * @uses DatosDestinatarioRequest::setObservaciones()
     */
    public function __construct(?DireccionRequest $direccion = null, ?string $nif = null, ?string $nombre = null, ?string $telefono = null, ?string $contacto = null, ?string $aLaAtencionDe = null, ?HorarioRequest $horario = null, ?string $observaciones = null)
    {
        $this
            ->setDireccion($direccion)
            ->setNif($nif)
            ->setNombre($nombre)
            ->setTelefono($telefono)
            ->setContacto($contacto)
            ->setALaAtencionDe($aLaAtencionDe)
            ->setHorario($horario)
            ->setObservaciones($observaciones);
    }

    /**
     * Get Direccion value
     */
    public function getDireccion(): ?DireccionRequest
    {
        return $this->Direccion;
    }

    /**
     * Set Direccion value
     *
     * @return \StructType\DatosDestinatarioRequest
     */
    public function setDireccion(?DireccionRequest $direccion = null): self
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
     * @return \StructType\DatosDestinatarioRequest
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
     * @return \StructType\DatosDestinatarioRequest
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
     * @return \StructType\DatosDestinatarioRequest
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
     * Get Contacto value
     */
    public function getContacto(): ?string
    {
        return $this->Contacto;
    }

    /**
     * Set Contacto value
     *
     * @return \StructType\DatosDestinatarioRequest
     */
    public function setContacto(?string $contacto = null): self
    {
        // validation for constraint: string
        if (! is_null($contacto) && ! is_string($contacto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contacto, true), gettype($contacto)), __LINE__);
        }
        $this->Contacto = $contacto;

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
     * @return \StructType\DatosDestinatarioRequest
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

    /**
     * Get Horario value
     */
    public function getHorario(): ?HorarioRequest
    {
        return $this->Horario;
    }

    /**
     * Set Horario value
     *
     * @return \StructType\DatosDestinatarioRequest
     */
    public function setHorario(?HorarioRequest $horario = null): self
    {
        $this->Horario = $horario;

        return $this;
    }

    /**
     * Get Observaciones value
     */
    public function getObservaciones(): ?string
    {
        return $this->Observaciones;
    }

    /**
     * Set Observaciones value
     *
     * @return \StructType\DatosDestinatarioRequest
     */
    public function setObservaciones(?string $observaciones = null): self
    {
        // validation for constraint: string
        if (! is_null($observaciones) && ! is_string($observaciones)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones, true), gettype($observaciones)), __LINE__);
        }
        $this->Observaciones = $observaciones;

        return $this;
    }
}
