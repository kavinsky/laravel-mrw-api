<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoRequest;
use Kavinsky\MRW\Types\ArrayType\ArrayOfNotificacionRequest;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosServicioRequest StructType
 */
#[AllowDynamicProperties]
class DatosServicioRequest extends AbstractStructBase
{
    /**
     * The Fecha
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Fecha = null;

    /**
     * The NumeroAlbaran
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroAlbaran = null;

    /**
     * The Referencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Referencia = null;

    /**
     * The CorrelacionRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CorrelacionRef = null;

    /**
     * The EnFranquicia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EnFranquicia = null;

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
     * The Frecuencia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Frecuencia = null;

    /**
     * The CodigoPromocion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoPromocion = null;

    /**
     * The NumeroSobre
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroSobre = null;

    /**
     * The Bultos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ArrayOfBultoRequest $Bultos = null;

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
     * The NumeroPuentes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroPuentes = null;

    /**
     * The EntregaSabado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EntregaSabado = null;

    /**
     * The Entrega830
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Entrega830 = null;

    /**
     * The EntregaPartirDe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EntregaPartirDe = null;

    /**
     * The Gestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Gestion = null;

    /**
     * The Retorno
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Retorno = null;

    /**
     * The CodigoServicioRetorno
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoServicioRetorno = null;

    /**
     * The ConfirmacionInmediata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ConfirmacionInmediata = null;

    /**
     * The Reembolso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Reembolso = null;

    /**
     * The ImporteReembolso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ImporteReembolso = null;

    /**
     * The TipoMercancia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TipoMercancia = null;

    /**
     * The ValorDeclarado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ValorDeclarado = null;

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
     * The Notificaciones
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ArrayOfNotificacionRequest $Notificaciones = null;

    /**
     * The SeguroOpcional
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SeguroOpcionalRequest $SeguroOpcional = null;

    /**
     * The TramoHorario
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TramoHorario = null;

    /**
     * The PortesDebidos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PortesDebidos = null;

    /**
     * The Mascara_Tipos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Mascara_Tipos = null;

    /**
     * The Mascara_Campos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Mascara_Campos = null;

    /**
     * The Asistente
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Asistente = null;

    /**
     * The Burofax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Burofax = null;

    /**
     * Constructor method for DatosServicioRequest
     *
     * @uses DatosServicioRequest::setFecha()
     * @uses DatosServicioRequest::setNumeroAlbaran()
     * @uses DatosServicioRequest::setReferencia()
     * @uses DatosServicioRequest::setCorrelacionRef()
     * @uses DatosServicioRequest::setEnFranquicia()
     * @uses DatosServicioRequest::setCodigoServicio()
     * @uses DatosServicioRequest::setDescripcionServicio()
     * @uses DatosServicioRequest::setFrecuencia()
     * @uses DatosServicioRequest::setCodigoPromocion()
     * @uses DatosServicioRequest::setNumeroSobre()
     * @uses DatosServicioRequest::setBultos()
     * @uses DatosServicioRequest::setNumeroBultos()
     * @uses DatosServicioRequest::setPeso()
     * @uses DatosServicioRequest::setNumeroPuentes()
     * @uses DatosServicioRequest::setEntregaSabado()
     * @uses DatosServicioRequest::setEntrega830()
     * @uses DatosServicioRequest::setEntregaPartirDe()
     * @uses DatosServicioRequest::setGestion()
     * @uses DatosServicioRequest::setRetorno()
     * @uses DatosServicioRequest::setCodigoServicioRetorno()
     * @uses DatosServicioRequest::setConfirmacionInmediata()
     * @uses DatosServicioRequest::setReembolso()
     * @uses DatosServicioRequest::setImporteReembolso()
     * @uses DatosServicioRequest::setTipoMercancia()
     * @uses DatosServicioRequest::setValorDeclarado()
     * @uses DatosServicioRequest::setServicioEspecial()
     * @uses DatosServicioRequest::setCodigoMoneda()
     * @uses DatosServicioRequest::setValorEstadistico()
     * @uses DatosServicioRequest::setValorEstadisticoEuros()
     * @uses DatosServicioRequest::setNotificaciones()
     * @uses DatosServicioRequest::setSeguroOpcional()
     * @uses DatosServicioRequest::setTramoHorario()
     * @uses DatosServicioRequest::setPortesDebidos()
     * @uses DatosServicioRequest::setMascara_Tipos()
     * @uses DatosServicioRequest::setMascara_Campos()
     * @uses DatosServicioRequest::setAsistente()
     * @uses DatosServicioRequest::setBurofax()
     */
    public function __construct(?string $fecha = null, ?string $numeroAlbaran = null, ?string $referencia = null, ?string $correlacionRef = null, ?string $enFranquicia = null, ?string $codigoServicio = null, ?string $descripcionServicio = null, ?string $frecuencia = null, ?string $codigoPromocion = null, ?string $numeroSobre = null, ?ArrayOfBultoRequest $bultos = null, ?string $numeroBultos = null, ?string $peso = null, ?string $numeroPuentes = null, ?string $entregaSabado = null, ?string $entrega830 = null, ?string $entregaPartirDe = null, ?string $gestion = null, ?string $retorno = null, ?string $codigoServicioRetorno = null, ?string $confirmacionInmediata = null, ?string $reembolso = null, ?string $importeReembolso = null, ?string $tipoMercancia = null, ?string $valorDeclarado = null, ?string $servicioEspecial = null, ?string $codigoMoneda = null, ?string $valorEstadistico = null, ?string $valorEstadisticoEuros = null, ?ArrayOfNotificacionRequest $notificaciones = null, ?SeguroOpcionalRequest $seguroOpcional = null, ?string $tramoHorario = null, ?string $portesDebidos = null, ?string $mascara_Tipos = null, ?string $mascara_Campos = null, ?string $asistente = null, ?string $burofax = null)
    {
        $this
            ->setFecha($fecha)
            ->setNumeroAlbaran($numeroAlbaran)
            ->setReferencia($referencia)
            ->setCorrelacionRef($correlacionRef)
            ->setEnFranquicia($enFranquicia)
            ->setCodigoServicio($codigoServicio)
            ->setDescripcionServicio($descripcionServicio)
            ->setFrecuencia($frecuencia)
            ->setCodigoPromocion($codigoPromocion)
            ->setNumeroSobre($numeroSobre)
            ->setBultos($bultos)
            ->setNumeroBultos($numeroBultos)
            ->setPeso($peso)
            ->setNumeroPuentes($numeroPuentes)
            ->setEntregaSabado($entregaSabado)
            ->setEntrega830($entrega830)
            ->setEntregaPartirDe($entregaPartirDe)
            ->setGestion($gestion)
            ->setRetorno($retorno)
            ->setCodigoServicioRetorno($codigoServicioRetorno)
            ->setConfirmacionInmediata($confirmacionInmediata)
            ->setReembolso($reembolso)
            ->setImporteReembolso($importeReembolso)
            ->setTipoMercancia($tipoMercancia)
            ->setValorDeclarado($valorDeclarado)
            ->setServicioEspecial($servicioEspecial)
            ->setCodigoMoneda($codigoMoneda)
            ->setValorEstadistico($valorEstadistico)
            ->setValorEstadisticoEuros($valorEstadisticoEuros)
            ->setNotificaciones($notificaciones)
            ->setSeguroOpcional($seguroOpcional)
            ->setTramoHorario($tramoHorario)
            ->setPortesDebidos($portesDebidos)
            ->setMascara_Tipos($mascara_Tipos)
            ->setMascara_Campos($mascara_Campos)
            ->setAsistente($asistente)
            ->setBurofax($burofax);
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
     * @return \StructType\DatosServicioRequest
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
     * Get NumeroAlbaran value
     */
    public function getNumeroAlbaran(): ?string
    {
        return $this->NumeroAlbaran;
    }

    /**
     * Set NumeroAlbaran value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setNumeroAlbaran(?string $numeroAlbaran = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroAlbaran) && ! is_string($numeroAlbaran)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroAlbaran, true), gettype($numeroAlbaran)), __LINE__);
        }
        $this->NumeroAlbaran = $numeroAlbaran;

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
     * @return \StructType\DatosServicioRequest
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
     * Get CorrelacionRef value
     */
    public function getCorrelacionRef(): ?string
    {
        return $this->CorrelacionRef;
    }

    /**
     * Set CorrelacionRef value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setCorrelacionRef(?string $correlacionRef = null): self
    {
        // validation for constraint: string
        if (! is_null($correlacionRef) && ! is_string($correlacionRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlacionRef, true), gettype($correlacionRef)), __LINE__);
        }
        $this->CorrelacionRef = $correlacionRef;

        return $this;
    }

    /**
     * Get EnFranquicia value
     */
    public function getEnFranquicia(): ?string
    {
        return $this->EnFranquicia;
    }

    /**
     * Set EnFranquicia value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setEnFranquicia(?string $enFranquicia = null): self
    {
        // validation for constraint: string
        if (! is_null($enFranquicia) && ! is_string($enFranquicia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enFranquicia, true), gettype($enFranquicia)), __LINE__);
        }
        $this->EnFranquicia = $enFranquicia;

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
     * @return \StructType\DatosServicioRequest
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
     * @return \StructType\DatosServicioRequest
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
     * Get Frecuencia value
     */
    public function getFrecuencia(): ?string
    {
        return $this->Frecuencia;
    }

    /**
     * Set Frecuencia value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setFrecuencia(?string $frecuencia = null): self
    {
        // validation for constraint: string
        if (! is_null($frecuencia) && ! is_string($frecuencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frecuencia, true), gettype($frecuencia)), __LINE__);
        }
        $this->Frecuencia = $frecuencia;

        return $this;
    }

    /**
     * Get CodigoPromocion value
     */
    public function getCodigoPromocion(): ?string
    {
        return $this->CodigoPromocion;
    }

    /**
     * Set CodigoPromocion value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setCodigoPromocion(?string $codigoPromocion = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoPromocion) && ! is_string($codigoPromocion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPromocion, true), gettype($codigoPromocion)), __LINE__);
        }
        $this->CodigoPromocion = $codigoPromocion;

        return $this;
    }

    /**
     * Get NumeroSobre value
     */
    public function getNumeroSobre(): ?string
    {
        return $this->NumeroSobre;
    }

    /**
     * Set NumeroSobre value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setNumeroSobre(?string $numeroSobre = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroSobre) && ! is_string($numeroSobre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSobre, true), gettype($numeroSobre)), __LINE__);
        }
        $this->NumeroSobre = $numeroSobre;

        return $this;
    }

    /**
     * Get Bultos value
     */
    public function getBultos(): ?ArrayOfBultoRequest
    {
        return $this->Bultos;
    }

    /**
     * Set Bultos value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setBultos(?ArrayOfBultoRequest $bultos = null): self
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
     * @return \StructType\DatosServicioRequest
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
     * @return \StructType\DatosServicioRequest
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
     * Get NumeroPuentes value
     */
    public function getNumeroPuentes(): ?string
    {
        return $this->NumeroPuentes;
    }

    /**
     * Set NumeroPuentes value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setNumeroPuentes(?string $numeroPuentes = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroPuentes) && ! is_string($numeroPuentes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroPuentes, true), gettype($numeroPuentes)), __LINE__);
        }
        $this->NumeroPuentes = $numeroPuentes;

        return $this;
    }

    /**
     * Get EntregaSabado value
     */
    public function getEntregaSabado(): ?string
    {
        return $this->EntregaSabado;
    }

    /**
     * Set EntregaSabado value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setEntregaSabado(?string $entregaSabado = null): self
    {
        // validation for constraint: string
        if (! is_null($entregaSabado) && ! is_string($entregaSabado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaSabado, true), gettype($entregaSabado)), __LINE__);
        }
        $this->EntregaSabado = $entregaSabado;

        return $this;
    }

    /**
     * Get Entrega830 value
     */
    public function getEntrega830(): ?string
    {
        return $this->Entrega830;
    }

    /**
     * Set Entrega830 value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setEntrega830(?string $entrega830 = null): self
    {
        // validation for constraint: string
        if (! is_null($entrega830) && ! is_string($entrega830)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entrega830, true), gettype($entrega830)), __LINE__);
        }
        $this->Entrega830 = $entrega830;

        return $this;
    }

    /**
     * Get EntregaPartirDe value
     */
    public function getEntregaPartirDe(): ?string
    {
        return $this->EntregaPartirDe;
    }

    /**
     * Set EntregaPartirDe value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setEntregaPartirDe(?string $entregaPartirDe = null): self
    {
        // validation for constraint: string
        if (! is_null($entregaPartirDe) && ! is_string($entregaPartirDe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaPartirDe, true), gettype($entregaPartirDe)), __LINE__);
        }
        $this->EntregaPartirDe = $entregaPartirDe;

        return $this;
    }

    /**
     * Get Gestion value
     */
    public function getGestion(): ?string
    {
        return $this->Gestion;
    }

    /**
     * Set Gestion value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setGestion(?string $gestion = null): self
    {
        // validation for constraint: string
        if (! is_null($gestion) && ! is_string($gestion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gestion, true), gettype($gestion)), __LINE__);
        }
        $this->Gestion = $gestion;

        return $this;
    }

    /**
     * Get Retorno value
     */
    public function getRetorno(): ?string
    {
        return $this->Retorno;
    }

    /**
     * Set Retorno value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setRetorno(?string $retorno = null): self
    {
        // validation for constraint: string
        if (! is_null($retorno) && ! is_string($retorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retorno, true), gettype($retorno)), __LINE__);
        }
        $this->Retorno = $retorno;

        return $this;
    }

    /**
     * Get CodigoServicioRetorno value
     */
    public function getCodigoServicioRetorno(): ?string
    {
        return $this->CodigoServicioRetorno;
    }

    /**
     * Set CodigoServicioRetorno value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setCodigoServicioRetorno(?string $codigoServicioRetorno = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoServicioRetorno) && ! is_string($codigoServicioRetorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoServicioRetorno, true), gettype($codigoServicioRetorno)), __LINE__);
        }
        $this->CodigoServicioRetorno = $codigoServicioRetorno;

        return $this;
    }

    /**
     * Get ConfirmacionInmediata value
     */
    public function getConfirmacionInmediata(): ?string
    {
        return $this->ConfirmacionInmediata;
    }

    /**
     * Set ConfirmacionInmediata value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setConfirmacionInmediata(?string $confirmacionInmediata = null): self
    {
        // validation for constraint: string
        if (! is_null($confirmacionInmediata) && ! is_string($confirmacionInmediata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmacionInmediata, true), gettype($confirmacionInmediata)), __LINE__);
        }
        $this->ConfirmacionInmediata = $confirmacionInmediata;

        return $this;
    }

    /**
     * Get Reembolso value
     */
    public function getReembolso(): ?string
    {
        return $this->Reembolso;
    }

    /**
     * Set Reembolso value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setReembolso(?string $reembolso = null): self
    {
        // validation for constraint: string
        if (! is_null($reembolso) && ! is_string($reembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reembolso, true), gettype($reembolso)), __LINE__);
        }
        $this->Reembolso = $reembolso;

        return $this;
    }

    /**
     * Get ImporteReembolso value
     */
    public function getImporteReembolso(): ?string
    {
        return $this->ImporteReembolso;
    }

    /**
     * Set ImporteReembolso value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setImporteReembolso(?string $importeReembolso = null): self
    {
        // validation for constraint: string
        if (! is_null($importeReembolso) && ! is_string($importeReembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeReembolso, true), gettype($importeReembolso)), __LINE__);
        }
        $this->ImporteReembolso = $importeReembolso;

        return $this;
    }

    /**
     * Get TipoMercancia value
     */
    public function getTipoMercancia(): ?string
    {
        return $this->TipoMercancia;
    }

    /**
     * Set TipoMercancia value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setTipoMercancia(?string $tipoMercancia = null): self
    {
        // validation for constraint: string
        if (! is_null($tipoMercancia) && ! is_string($tipoMercancia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoMercancia, true), gettype($tipoMercancia)), __LINE__);
        }
        $this->TipoMercancia = $tipoMercancia;

        return $this;
    }

    /**
     * Get ValorDeclarado value
     */
    public function getValorDeclarado(): ?string
    {
        return $this->ValorDeclarado;
    }

    /**
     * Set ValorDeclarado value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setValorDeclarado(?string $valorDeclarado = null): self
    {
        // validation for constraint: string
        if (! is_null($valorDeclarado) && ! is_string($valorDeclarado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorDeclarado, true), gettype($valorDeclarado)), __LINE__);
        }
        $this->ValorDeclarado = $valorDeclarado;

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
     * @return \StructType\DatosServicioRequest
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
     * @return \StructType\DatosServicioRequest
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
     * @return \StructType\DatosServicioRequest
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
     * @return \StructType\DatosServicioRequest
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
     * Get Notificaciones value
     */
    public function getNotificaciones(): ?ArrayOfNotificacionRequest
    {
        return $this->Notificaciones;
    }

    /**
     * Set Notificaciones value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setNotificaciones(?ArrayOfNotificacionRequest $notificaciones = null): self
    {
        $this->Notificaciones = $notificaciones;

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
     * @return \StructType\DatosServicioRequest
     */
    public function setSeguroOpcional(?SeguroOpcionalRequest $seguroOpcional = null): self
    {
        $this->SeguroOpcional = $seguroOpcional;

        return $this;
    }

    /**
     * Get TramoHorario value
     */
    public function getTramoHorario(): ?string
    {
        return $this->TramoHorario;
    }

    /**
     * Set TramoHorario value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setTramoHorario(?string $tramoHorario = null): self
    {
        // validation for constraint: string
        if (! is_null($tramoHorario) && ! is_string($tramoHorario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tramoHorario, true), gettype($tramoHorario)), __LINE__);
        }
        $this->TramoHorario = $tramoHorario;

        return $this;
    }

    /**
     * Get PortesDebidos value
     */
    public function getPortesDebidos(): ?string
    {
        return $this->PortesDebidos;
    }

    /**
     * Set PortesDebidos value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setPortesDebidos(?string $portesDebidos = null): self
    {
        // validation for constraint: string
        if (! is_null($portesDebidos) && ! is_string($portesDebidos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portesDebidos, true), gettype($portesDebidos)), __LINE__);
        }
        $this->PortesDebidos = $portesDebidos;

        return $this;
    }

    /**
     * Get Mascara_Tipos value
     */
    public function getMascara_Tipos(): ?string
    {
        return $this->Mascara_Tipos;
    }

    /**
     * Set Mascara_Tipos value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setMascara_Tipos(?string $mascara_Tipos = null): self
    {
        // validation for constraint: string
        if (! is_null($mascara_Tipos) && ! is_string($mascara_Tipos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mascara_Tipos, true), gettype($mascara_Tipos)), __LINE__);
        }
        $this->Mascara_Tipos = $mascara_Tipos;

        return $this;
    }

    /**
     * Get Mascara_Campos value
     */
    public function getMascara_Campos(): ?string
    {
        return $this->Mascara_Campos;
    }

    /**
     * Set Mascara_Campos value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setMascara_Campos(?string $mascara_Campos = null): self
    {
        // validation for constraint: string
        if (! is_null($mascara_Campos) && ! is_string($mascara_Campos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mascara_Campos, true), gettype($mascara_Campos)), __LINE__);
        }
        $this->Mascara_Campos = $mascara_Campos;

        return $this;
    }

    /**
     * Get Asistente value
     */
    public function getAsistente(): ?string
    {
        return $this->Asistente;
    }

    /**
     * Set Asistente value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setAsistente(?string $asistente = null): self
    {
        // validation for constraint: string
        if (! is_null($asistente) && ! is_string($asistente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asistente, true), gettype($asistente)), __LINE__);
        }
        $this->Asistente = $asistente;

        return $this;
    }

    /**
     * Get Burofax value
     */
    public function getBurofax(): ?string
    {
        return $this->Burofax;
    }

    /**
     * Set Burofax value
     *
     * @return \StructType\DatosServicioRequest
     */
    public function setBurofax(?string $burofax = null): self
    {
        // validation for constraint: string
        if (! is_null($burofax) && ! is_string($burofax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($burofax, true), gettype($burofax)), __LINE__);
        }
        $this->Burofax = $burofax;

        return $this;
    }
}
