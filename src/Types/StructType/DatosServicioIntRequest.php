<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoIntRequest;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosServicioIntRequest StructType
 */
#[AllowDynamicProperties]
class DatosServicioIntRequest extends AbstractStructBase
{
    /**
     * The Fecha
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Fecha = null;

    /**
     * The Referencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Referencia = null;

    /**
     * The CodigoServicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoServicio = null;

    /**
     * The DescripcionServicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionServicio = null;

    /**
     * The Bultos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ArrayOfBultoIntRequest $Bultos = null;

    /**
     * The NumeroBultos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroBultos = null;

    /**
     * The Peso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Peso = null;

    /**
     * The ServicioEspecial
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ServicioEspecial = null;

    /**
     * The CodigoMoneda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoMoneda = null;

    /**
     * The ValorEstadistico
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ValorEstadistico = null;

    /**
     * The ValorEstadisticoEuros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ValorEstadisticoEuros = null;

    /**
     * The NotificacionSMS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?NotificacionIntRequest $NotificacionSMS = null;

    /**
     * The SeguroOpcional
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SeguroOpcionalRequest $SeguroOpcional = null;

    /**
     * Constructor method for DatosServicioIntRequest
     *
     * @uses DatosServicioIntRequest::setFecha()
     * @uses DatosServicioIntRequest::setReferencia()
     * @uses DatosServicioIntRequest::setCodigoServicio()
     * @uses DatosServicioIntRequest::setDescripcionServicio()
     * @uses DatosServicioIntRequest::setBultos()
     * @uses DatosServicioIntRequest::setNumeroBultos()
     * @uses DatosServicioIntRequest::setPeso()
     * @uses DatosServicioIntRequest::setServicioEspecial()
     * @uses DatosServicioIntRequest::setCodigoMoneda()
     * @uses DatosServicioIntRequest::setValorEstadistico()
     * @uses DatosServicioIntRequest::setValorEstadisticoEuros()
     * @uses DatosServicioIntRequest::setNotificacionSMS()
     * @uses DatosServicioIntRequest::setSeguroOpcional()
     */
    public function __construct(?string $fecha = null, ?string $referencia = null, ?string $codigoServicio = null, ?string $descripcionServicio = null, ?ArrayOfBultoIntRequest $bultos = null, ?string $numeroBultos = null, ?string $peso = null, ?string $servicioEspecial = null, ?string $codigoMoneda = null, ?string $valorEstadistico = null, ?string $valorEstadisticoEuros = null, ?NotificacionIntRequest $notificacionSMS = null, ?SeguroOpcionalRequest $seguroOpcional = null)
    {
        $this
            ->setFecha($fecha)
            ->setReferencia($referencia)
            ->setCodigoServicio($codigoServicio)
            ->setDescripcionServicio($descripcionServicio)
            ->setBultos($bultos)
            ->setNumeroBultos($numeroBultos)
            ->setPeso($peso)
            ->setServicioEspecial($servicioEspecial)
            ->setCodigoMoneda($codigoMoneda)
            ->setValorEstadistico($valorEstadistico)
            ->setValorEstadisticoEuros($valorEstadisticoEuros)
            ->setNotificacionSMS($notificacionSMS)
            ->setSeguroOpcional($seguroOpcional);
    }

    /**
     * Get Fecha value
     */
    public function getFecha(): ?string
    {
        return $this->Fecha;
    }

    /**
     * Set Fecha value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setFecha(?string $fecha = null): self
    {
        // validation for constraint: string
        if (! is_null($fecha) && ! is_string($fecha)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fecha, true), gettype($fecha)), __LINE__);
        }
        $this->Fecha = $fecha;

        return $this;
    }

    /**
     * Get Referencia value
     */
    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    /**
     * Set Referencia value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setReferencia(?string $referencia = null): self
    {
        // validation for constraint: string
        if (! is_null($referencia) && ! is_string($referencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        $this->Referencia = $referencia;

        return $this;
    }

    /**
     * Get CodigoServicio value
     */
    public function getCodigoServicio(): ?string
    {
        return $this->CodigoServicio;
    }

    /**
     * Set CodigoServicio value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setCodigoServicio(?string $codigoServicio = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoServicio) && ! is_string($codigoServicio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoServicio, true), gettype($codigoServicio)), __LINE__);
        }
        $this->CodigoServicio = $codigoServicio;

        return $this;
    }

    /**
     * Get DescripcionServicio value
     */
    public function getDescripcionServicio(): ?string
    {
        return $this->DescripcionServicio;
    }

    /**
     * Set DescripcionServicio value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setDescripcionServicio(?string $descripcionServicio = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionServicio) && ! is_string($descripcionServicio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionServicio, true), gettype($descripcionServicio)), __LINE__);
        }
        $this->DescripcionServicio = $descripcionServicio;

        return $this;
    }

    /**
     * Get Bultos value
     */
    public function getBultos(): ?ArrayOfBultoIntRequest
    {
        return $this->Bultos;
    }

    /**
     * Set Bultos value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setBultos(?ArrayOfBultoIntRequest $bultos = null): self
    {
        $this->Bultos = $bultos;

        return $this;
    }

    /**
     * Get NumeroBultos value
     */
    public function getNumeroBultos(): ?string
    {
        return $this->NumeroBultos;
    }

    /**
     * Set NumeroBultos value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setNumeroBultos(?string $numeroBultos = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroBultos) && ! is_string($numeroBultos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroBultos, true), gettype($numeroBultos)), __LINE__);
        }
        $this->NumeroBultos = $numeroBultos;

        return $this;
    }

    /**
     * Get Peso value
     */
    public function getPeso(): ?string
    {
        return $this->Peso;
    }

    /**
     * Set Peso value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setPeso(?string $peso = null): self
    {
        // validation for constraint: string
        if (! is_null($peso) && ! is_string($peso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($peso, true), gettype($peso)), __LINE__);
        }
        $this->Peso = $peso;

        return $this;
    }

    /**
     * Get ServicioEspecial value
     */
    public function getServicioEspecial(): ?string
    {
        return $this->ServicioEspecial;
    }

    /**
     * Set ServicioEspecial value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setServicioEspecial(?string $servicioEspecial = null): self
    {
        // validation for constraint: string
        if (! is_null($servicioEspecial) && ! is_string($servicioEspecial)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($servicioEspecial, true), gettype($servicioEspecial)), __LINE__);
        }
        $this->ServicioEspecial = $servicioEspecial;

        return $this;
    }

    /**
     * Get CodigoMoneda value
     */
    public function getCodigoMoneda(): ?string
    {
        return $this->CodigoMoneda;
    }

    /**
     * Set CodigoMoneda value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setCodigoMoneda(?string $codigoMoneda = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoMoneda) && ! is_string($codigoMoneda)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoMoneda, true), gettype($codigoMoneda)), __LINE__);
        }
        $this->CodigoMoneda = $codigoMoneda;

        return $this;
    }

    /**
     * Get ValorEstadistico value
     */
    public function getValorEstadistico(): ?string
    {
        return $this->ValorEstadistico;
    }

    /**
     * Set ValorEstadistico value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setValorEstadistico(?string $valorEstadistico = null): self
    {
        // validation for constraint: string
        if (! is_null($valorEstadistico) && ! is_string($valorEstadistico)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorEstadistico, true), gettype($valorEstadistico)), __LINE__);
        }
        $this->ValorEstadistico = $valorEstadistico;

        return $this;
    }

    /**
     * Get ValorEstadisticoEuros value
     */
    public function getValorEstadisticoEuros(): ?string
    {
        return $this->ValorEstadisticoEuros;
    }

    /**
     * Set ValorEstadisticoEuros value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setValorEstadisticoEuros(?string $valorEstadisticoEuros = null): self
    {
        // validation for constraint: string
        if (! is_null($valorEstadisticoEuros) && ! is_string($valorEstadisticoEuros)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorEstadisticoEuros, true), gettype($valorEstadisticoEuros)), __LINE__);
        }
        $this->ValorEstadisticoEuros = $valorEstadisticoEuros;

        return $this;
    }

    /**
     * Get NotificacionSMS value
     */
    public function getNotificacionSMS(): ?NotificacionIntRequest
    {
        return $this->NotificacionSMS;
    }

    /**
     * Set NotificacionSMS value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setNotificacionSMS(?NotificacionIntRequest $notificacionSMS = null): self
    {
        $this->NotificacionSMS = $notificacionSMS;

        return $this;
    }

    /**
     * Get SeguroOpcional value
     */
    public function getSeguroOpcional(): ?SeguroOpcionalRequest
    {
        return $this->SeguroOpcional;
    }

    /**
     * Set SeguroOpcional value
     *
     * @return \StructType\DatosServicioIntRequest
     */
    public function setSeguroOpcional(?SeguroOpcionalRequest $seguroOpcional = null): self
    {
        $this->SeguroOpcional = $seguroOpcional;

        return $this;
    }
}
