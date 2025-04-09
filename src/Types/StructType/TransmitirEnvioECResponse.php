<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for TransmitirEnvioECResponse StructType
 */
#[AllowDynamicProperties]
class TransmitirEnvioECResponse extends BaseResponse
{
    /**
     * The KmRecogida
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $KmRecogida;

    /**
     * The KmEntrega
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $KmEntrega;

    /**
     * The TransmitirEnvioECResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\StructType\TransmitirEnvioECResponse $TransmitirEnvioECResult = null;

    /**
     * The FechaSolicitud
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $FechaSolicitud = null;

    /**
     * The NumEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumEnvio = null;

    /**
     * The NumEnvioLecturaPlataformas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumEnvioLecturaPlataformas = null;

    /**
     * The CodigoFranquiciaDestino
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoFranquiciaDestino = null;

    /**
     * The NombreFranquiciaDestino
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NombreFranquiciaDestino = null;

    /**
     * The CodigoSaca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoSaca = null;

    /**
     * The NombreSaca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NombreSaca = null;

    /**
     * The CodigoRuta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoRuta = null;

    /**
     * The CodigoTipoCobro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoTipoCobro = null;

    /**
     * The DescripcionTipoCobro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionTipoCobro = null;

    /**
     * The CodigoTipoEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoTipoEnvio = null;

    /**
     * The NumeroPuentes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroPuentes = null;

    /**
     * The NumeroKilos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroKilos = null;

    /**
     * The NumeroBultos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroBultos = null;

    /**
     * The NombreServicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NombreServicio = null;

    /**
     * The NombrePlanAccionSocial
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NombrePlanAccionSocial = null;

    /**
     * The DescripcionTipoRetorno
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionTipoRetorno = null;

    /**
     * The DescripcionTipoGestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionTipoGestion = null;

    /**
     * The DescripcionEntregaSabado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionEntregaSabado = null;

    /**
     * The ImporteTotalReembolso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ImporteTotalReembolso = null;

    /**
     * The DescripcionTipoMercancia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionTipoMercancia = null;

    /**
     * The HoraMaximaEntrega
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HoraMaximaEntrega = null;

    /**
     * The DescripcionConfirmacionInmediata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionConfirmacionInmediata = null;

    /**
     * The DescripcionRevisionEnFranquicia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DescripcionRevisionEnFranquicia = null;

    /**
     * The CodigoBarrasNumEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoBarrasNumEnvio = null;

    /**
     * The CodigoBarrasNumEnvioLecturaPlataformas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoBarrasNumEnvioLecturaPlataformas = null;

    /**
     * Constructor method for TransmitirEnvioECResponse
     *
     * @uses TransmitirEnvioECResponse::setKmRecogida()
     * @uses TransmitirEnvioECResponse::setKmEntrega()
     * @uses TransmitirEnvioECResponse::setTransmitirEnvioECResult()
     * @uses TransmitirEnvioECResponse::setFechaSolicitud()
     * @uses TransmitirEnvioECResponse::setNumEnvio()
     * @uses TransmitirEnvioECResponse::setNumEnvioLecturaPlataformas()
     * @uses TransmitirEnvioECResponse::setCodigoFranquiciaDestino()
     * @uses TransmitirEnvioECResponse::setNombreFranquiciaDestino()
     * @uses TransmitirEnvioECResponse::setCodigoSaca()
     * @uses TransmitirEnvioECResponse::setNombreSaca()
     * @uses TransmitirEnvioECResponse::setCodigoRuta()
     * @uses TransmitirEnvioECResponse::setCodigoTipoCobro()
     * @uses TransmitirEnvioECResponse::setDescripcionTipoCobro()
     * @uses TransmitirEnvioECResponse::setCodigoTipoEnvio()
     * @uses TransmitirEnvioECResponse::setNumeroPuentes()
     * @uses TransmitirEnvioECResponse::setNumeroKilos()
     * @uses TransmitirEnvioECResponse::setNumeroBultos()
     * @uses TransmitirEnvioECResponse::setNombreServicio()
     * @uses TransmitirEnvioECResponse::setNombrePlanAccionSocial()
     * @uses TransmitirEnvioECResponse::setDescripcionTipoRetorno()
     * @uses TransmitirEnvioECResponse::setDescripcionTipoGestion()
     * @uses TransmitirEnvioECResponse::setDescripcionEntregaSabado()
     * @uses TransmitirEnvioECResponse::setImporteTotalReembolso()
     * @uses TransmitirEnvioECResponse::setDescripcionTipoMercancia()
     * @uses TransmitirEnvioECResponse::setHoraMaximaEntrega()
     * @uses TransmitirEnvioECResponse::setDescripcionConfirmacionInmediata()
     * @uses TransmitirEnvioECResponse::setDescripcionRevisionEnFranquicia()
     * @uses TransmitirEnvioECResponse::setCodigoBarrasNumEnvio()
     * @uses TransmitirEnvioECResponse::setCodigoBarrasNumEnvioLecturaPlataformas()
     */
    public function __construct(int $kmRecogida, int $kmEntrega, ?\StructType\TransmitirEnvioECResponse $transmitirEnvioECResult = null, ?string $fechaSolicitud = null, ?string $numEnvio = null, ?string $numEnvioLecturaPlataformas = null, ?string $codigoFranquiciaDestino = null, ?string $nombreFranquiciaDestino = null, ?string $codigoSaca = null, ?string $nombreSaca = null, ?string $codigoRuta = null, ?string $codigoTipoCobro = null, ?string $descripcionTipoCobro = null, ?string $codigoTipoEnvio = null, ?string $numeroPuentes = null, ?string $numeroKilos = null, ?string $numeroBultos = null, ?string $nombreServicio = null, ?string $nombrePlanAccionSocial = null, ?string $descripcionTipoRetorno = null, ?string $descripcionTipoGestion = null, ?string $descripcionEntregaSabado = null, ?string $importeTotalReembolso = null, ?string $descripcionTipoMercancia = null, ?string $horaMaximaEntrega = null, ?string $descripcionConfirmacionInmediata = null, ?string $descripcionRevisionEnFranquicia = null, ?string $codigoBarrasNumEnvio = null, ?string $codigoBarrasNumEnvioLecturaPlataformas = null)
    {
        $this
            ->setKmRecogida($kmRecogida)
            ->setKmEntrega($kmEntrega)
            ->setTransmitirEnvioECResult($transmitirEnvioECResult)
            ->setFechaSolicitud($fechaSolicitud)
            ->setNumEnvio($numEnvio)
            ->setNumEnvioLecturaPlataformas($numEnvioLecturaPlataformas)
            ->setCodigoFranquiciaDestino($codigoFranquiciaDestino)
            ->setNombreFranquiciaDestino($nombreFranquiciaDestino)
            ->setCodigoSaca($codigoSaca)
            ->setNombreSaca($nombreSaca)
            ->setCodigoRuta($codigoRuta)
            ->setCodigoTipoCobro($codigoTipoCobro)
            ->setDescripcionTipoCobro($descripcionTipoCobro)
            ->setCodigoTipoEnvio($codigoTipoEnvio)
            ->setNumeroPuentes($numeroPuentes)
            ->setNumeroKilos($numeroKilos)
            ->setNumeroBultos($numeroBultos)
            ->setNombreServicio($nombreServicio)
            ->setNombrePlanAccionSocial($nombrePlanAccionSocial)
            ->setDescripcionTipoRetorno($descripcionTipoRetorno)
            ->setDescripcionTipoGestion($descripcionTipoGestion)
            ->setDescripcionEntregaSabado($descripcionEntregaSabado)
            ->setImporteTotalReembolso($importeTotalReembolso)
            ->setDescripcionTipoMercancia($descripcionTipoMercancia)
            ->setHoraMaximaEntrega($horaMaximaEntrega)
            ->setDescripcionConfirmacionInmediata($descripcionConfirmacionInmediata)
            ->setDescripcionRevisionEnFranquicia($descripcionRevisionEnFranquicia)
            ->setCodigoBarrasNumEnvio($codigoBarrasNumEnvio)
            ->setCodigoBarrasNumEnvioLecturaPlataformas($codigoBarrasNumEnvioLecturaPlataformas);
    }

    /**
     * Get KmRecogida value
     */
    public function getKmRecogida(): int
    {
        return $this->KmRecogida;
    }

    /**
     * Set KmRecogida value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setKmRecogida(int $kmRecogida): self
    {
        // validation for constraint: int
        if (! is_int($kmRecogida) && ! ctype_digit($kmRecogida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kmRecogida, true), gettype($kmRecogida)), __LINE__);
        }
        $this->KmRecogida = $kmRecogida;

        return $this;
    }

    /**
     * Get KmEntrega value
     */
    public function getKmEntrega(): int
    {
        return $this->KmEntrega;
    }

    /**
     * Set KmEntrega value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setKmEntrega(int $kmEntrega): self
    {
        // validation for constraint: int
        if (! is_int($kmEntrega) && ! ctype_digit($kmEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kmEntrega, true), gettype($kmEntrega)), __LINE__);
        }
        $this->KmEntrega = $kmEntrega;

        return $this;
    }

    /**
     * Get TransmitirEnvioECResult value
     */
    public function getTransmitirEnvioECResult(): ?\StructType\TransmitirEnvioECResponse
    {
        return $this->TransmitirEnvioECResult;
    }

    /**
     * Set TransmitirEnvioECResult value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setTransmitirEnvioECResult(?\StructType\TransmitirEnvioECResponse $transmitirEnvioECResult = null): self
    {
        $this->TransmitirEnvioECResult = $transmitirEnvioECResult;

        return $this;
    }

    /**
     * Get FechaSolicitud value
     */
    public function getFechaSolicitud(): ?string
    {
        return $this->FechaSolicitud;
    }

    /**
     * Set FechaSolicitud value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setFechaSolicitud(?string $fechaSolicitud = null): self
    {
        // validation for constraint: string
        if (! is_null($fechaSolicitud) && ! is_string($fechaSolicitud)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaSolicitud, true), gettype($fechaSolicitud)), __LINE__);
        }
        $this->FechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get NumEnvio value
     */
    public function getNumEnvio(): ?string
    {
        return $this->NumEnvio;
    }

    /**
     * Set NumEnvio value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setNumEnvio(?string $numEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($numEnvio) && ! is_string($numEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numEnvio, true), gettype($numEnvio)), __LINE__);
        }
        $this->NumEnvio = $numEnvio;

        return $this;
    }

    /**
     * Get NumEnvioLecturaPlataformas value
     */
    public function getNumEnvioLecturaPlataformas(): ?string
    {
        return $this->NumEnvioLecturaPlataformas;
    }

    /**
     * Set NumEnvioLecturaPlataformas value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setNumEnvioLecturaPlataformas(?string $numEnvioLecturaPlataformas = null): self
    {
        // validation for constraint: string
        if (! is_null($numEnvioLecturaPlataformas) && ! is_string($numEnvioLecturaPlataformas)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numEnvioLecturaPlataformas, true), gettype($numEnvioLecturaPlataformas)), __LINE__);
        }
        $this->NumEnvioLecturaPlataformas = $numEnvioLecturaPlataformas;

        return $this;
    }

    /**
     * Get CodigoFranquiciaDestino value
     */
    public function getCodigoFranquiciaDestino(): ?string
    {
        return $this->CodigoFranquiciaDestino;
    }

    /**
     * Set CodigoFranquiciaDestino value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setCodigoFranquiciaDestino(?string $codigoFranquiciaDestino = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoFranquiciaDestino) && ! is_string($codigoFranquiciaDestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoFranquiciaDestino, true), gettype($codigoFranquiciaDestino)), __LINE__);
        }
        $this->CodigoFranquiciaDestino = $codigoFranquiciaDestino;

        return $this;
    }

    /**
     * Get NombreFranquiciaDestino value
     */
    public function getNombreFranquiciaDestino(): ?string
    {
        return $this->NombreFranquiciaDestino;
    }

    /**
     * Set NombreFranquiciaDestino value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setNombreFranquiciaDestino(?string $nombreFranquiciaDestino = null): self
    {
        // validation for constraint: string
        if (! is_null($nombreFranquiciaDestino) && ! is_string($nombreFranquiciaDestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreFranquiciaDestino, true), gettype($nombreFranquiciaDestino)), __LINE__);
        }
        $this->NombreFranquiciaDestino = $nombreFranquiciaDestino;

        return $this;
    }

    /**
     * Get CodigoSaca value
     */
    public function getCodigoSaca(): ?string
    {
        return $this->CodigoSaca;
    }

    /**
     * Set CodigoSaca value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setCodigoSaca(?string $codigoSaca = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoSaca) && ! is_string($codigoSaca)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoSaca, true), gettype($codigoSaca)), __LINE__);
        }
        $this->CodigoSaca = $codigoSaca;

        return $this;
    }

    /**
     * Get NombreSaca value
     */
    public function getNombreSaca(): ?string
    {
        return $this->NombreSaca;
    }

    /**
     * Set NombreSaca value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setNombreSaca(?string $nombreSaca = null): self
    {
        // validation for constraint: string
        if (! is_null($nombreSaca) && ! is_string($nombreSaca)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreSaca, true), gettype($nombreSaca)), __LINE__);
        }
        $this->NombreSaca = $nombreSaca;

        return $this;
    }

    /**
     * Get CodigoRuta value
     */
    public function getCodigoRuta(): ?string
    {
        return $this->CodigoRuta;
    }

    /**
     * Set CodigoRuta value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setCodigoRuta(?string $codigoRuta = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoRuta) && ! is_string($codigoRuta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoRuta, true), gettype($codigoRuta)), __LINE__);
        }
        $this->CodigoRuta = $codigoRuta;

        return $this;
    }

    /**
     * Get CodigoTipoCobro value
     */
    public function getCodigoTipoCobro(): ?string
    {
        return $this->CodigoTipoCobro;
    }

    /**
     * Set CodigoTipoCobro value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setCodigoTipoCobro(?string $codigoTipoCobro = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoTipoCobro) && ! is_string($codigoTipoCobro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoTipoCobro, true), gettype($codigoTipoCobro)), __LINE__);
        }
        $this->CodigoTipoCobro = $codigoTipoCobro;

        return $this;
    }

    /**
     * Get DescripcionTipoCobro value
     */
    public function getDescripcionTipoCobro(): ?string
    {
        return $this->DescripcionTipoCobro;
    }

    /**
     * Set DescripcionTipoCobro value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setDescripcionTipoCobro(?string $descripcionTipoCobro = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionTipoCobro) && ! is_string($descripcionTipoCobro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionTipoCobro, true), gettype($descripcionTipoCobro)), __LINE__);
        }
        $this->DescripcionTipoCobro = $descripcionTipoCobro;

        return $this;
    }

    /**
     * Get CodigoTipoEnvio value
     */
    public function getCodigoTipoEnvio(): ?string
    {
        return $this->CodigoTipoEnvio;
    }

    /**
     * Set CodigoTipoEnvio value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setCodigoTipoEnvio(?string $codigoTipoEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoTipoEnvio) && ! is_string($codigoTipoEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoTipoEnvio, true), gettype($codigoTipoEnvio)), __LINE__);
        }
        $this->CodigoTipoEnvio = $codigoTipoEnvio;

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
     * @return \StructType\TransmitirEnvioECResponse
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
     * Get NumeroKilos value
     */
    public function getNumeroKilos(): ?string
    {
        return $this->NumeroKilos;
    }

    /**
     * Set NumeroKilos value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setNumeroKilos(?string $numeroKilos = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroKilos) && ! is_string($numeroKilos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroKilos, true), gettype($numeroKilos)), __LINE__);
        }
        $this->NumeroKilos = $numeroKilos;

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
     * @return \StructType\TransmitirEnvioECResponse
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
     * Get NombreServicio value
     */
    public function getNombreServicio(): ?string
    {
        return $this->NombreServicio;
    }

    /**
     * Set NombreServicio value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setNombreServicio(?string $nombreServicio = null): self
    {
        // validation for constraint: string
        if (! is_null($nombreServicio) && ! is_string($nombreServicio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreServicio, true), gettype($nombreServicio)), __LINE__);
        }
        $this->NombreServicio = $nombreServicio;

        return $this;
    }

    /**
     * Get NombrePlanAccionSocial value
     */
    public function getNombrePlanAccionSocial(): ?string
    {
        return $this->NombrePlanAccionSocial;
    }

    /**
     * Set NombrePlanAccionSocial value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setNombrePlanAccionSocial(?string $nombrePlanAccionSocial = null): self
    {
        // validation for constraint: string
        if (! is_null($nombrePlanAccionSocial) && ! is_string($nombrePlanAccionSocial)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombrePlanAccionSocial, true), gettype($nombrePlanAccionSocial)), __LINE__);
        }
        $this->NombrePlanAccionSocial = $nombrePlanAccionSocial;

        return $this;
    }

    /**
     * Get DescripcionTipoRetorno value
     */
    public function getDescripcionTipoRetorno(): ?string
    {
        return $this->DescripcionTipoRetorno;
    }

    /**
     * Set DescripcionTipoRetorno value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setDescripcionTipoRetorno(?string $descripcionTipoRetorno = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionTipoRetorno) && ! is_string($descripcionTipoRetorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionTipoRetorno, true), gettype($descripcionTipoRetorno)), __LINE__);
        }
        $this->DescripcionTipoRetorno = $descripcionTipoRetorno;

        return $this;
    }

    /**
     * Get DescripcionTipoGestion value
     */
    public function getDescripcionTipoGestion(): ?string
    {
        return $this->DescripcionTipoGestion;
    }

    /**
     * Set DescripcionTipoGestion value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setDescripcionTipoGestion(?string $descripcionTipoGestion = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionTipoGestion) && ! is_string($descripcionTipoGestion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionTipoGestion, true), gettype($descripcionTipoGestion)), __LINE__);
        }
        $this->DescripcionTipoGestion = $descripcionTipoGestion;

        return $this;
    }

    /**
     * Get DescripcionEntregaSabado value
     */
    public function getDescripcionEntregaSabado(): ?string
    {
        return $this->DescripcionEntregaSabado;
    }

    /**
     * Set DescripcionEntregaSabado value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setDescripcionEntregaSabado(?string $descripcionEntregaSabado = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionEntregaSabado) && ! is_string($descripcionEntregaSabado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionEntregaSabado, true), gettype($descripcionEntregaSabado)), __LINE__);
        }
        $this->DescripcionEntregaSabado = $descripcionEntregaSabado;

        return $this;
    }

    /**
     * Get ImporteTotalReembolso value
     */
    public function getImporteTotalReembolso(): ?string
    {
        return $this->ImporteTotalReembolso;
    }

    /**
     * Set ImporteTotalReembolso value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setImporteTotalReembolso(?string $importeTotalReembolso = null): self
    {
        // validation for constraint: string
        if (! is_null($importeTotalReembolso) && ! is_string($importeTotalReembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeTotalReembolso, true), gettype($importeTotalReembolso)), __LINE__);
        }
        $this->ImporteTotalReembolso = $importeTotalReembolso;

        return $this;
    }

    /**
     * Get DescripcionTipoMercancia value
     */
    public function getDescripcionTipoMercancia(): ?string
    {
        return $this->DescripcionTipoMercancia;
    }

    /**
     * Set DescripcionTipoMercancia value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setDescripcionTipoMercancia(?string $descripcionTipoMercancia = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionTipoMercancia) && ! is_string($descripcionTipoMercancia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionTipoMercancia, true), gettype($descripcionTipoMercancia)), __LINE__);
        }
        $this->DescripcionTipoMercancia = $descripcionTipoMercancia;

        return $this;
    }

    /**
     * Get HoraMaximaEntrega value
     */
    public function getHoraMaximaEntrega(): ?string
    {
        return $this->HoraMaximaEntrega;
    }

    /**
     * Set HoraMaximaEntrega value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setHoraMaximaEntrega(?string $horaMaximaEntrega = null): self
    {
        // validation for constraint: string
        if (! is_null($horaMaximaEntrega) && ! is_string($horaMaximaEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($horaMaximaEntrega, true), gettype($horaMaximaEntrega)), __LINE__);
        }
        $this->HoraMaximaEntrega = $horaMaximaEntrega;

        return $this;
    }

    /**
     * Get DescripcionConfirmacionInmediata value
     */
    public function getDescripcionConfirmacionInmediata(): ?string
    {
        return $this->DescripcionConfirmacionInmediata;
    }

    /**
     * Set DescripcionConfirmacionInmediata value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setDescripcionConfirmacionInmediata(?string $descripcionConfirmacionInmediata = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionConfirmacionInmediata) && ! is_string($descripcionConfirmacionInmediata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionConfirmacionInmediata, true), gettype($descripcionConfirmacionInmediata)), __LINE__);
        }
        $this->DescripcionConfirmacionInmediata = $descripcionConfirmacionInmediata;

        return $this;
    }

    /**
     * Get DescripcionRevisionEnFranquicia value
     */
    public function getDescripcionRevisionEnFranquicia(): ?string
    {
        return $this->DescripcionRevisionEnFranquicia;
    }

    /**
     * Set DescripcionRevisionEnFranquicia value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setDescripcionRevisionEnFranquicia(?string $descripcionRevisionEnFranquicia = null): self
    {
        // validation for constraint: string
        if (! is_null($descripcionRevisionEnFranquicia) && ! is_string($descripcionRevisionEnFranquicia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionRevisionEnFranquicia, true), gettype($descripcionRevisionEnFranquicia)), __LINE__);
        }
        $this->DescripcionRevisionEnFranquicia = $descripcionRevisionEnFranquicia;

        return $this;
    }

    /**
     * Get CodigoBarrasNumEnvio value
     */
    public function getCodigoBarrasNumEnvio(): ?string
    {
        return $this->CodigoBarrasNumEnvio;
    }

    /**
     * Set CodigoBarrasNumEnvio value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setCodigoBarrasNumEnvio(?string $codigoBarrasNumEnvio = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoBarrasNumEnvio) && ! is_string($codigoBarrasNumEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoBarrasNumEnvio, true), gettype($codigoBarrasNumEnvio)), __LINE__);
        }
        $this->CodigoBarrasNumEnvio = $codigoBarrasNumEnvio;

        return $this;
    }

    /**
     * Get CodigoBarrasNumEnvioLecturaPlataformas value
     */
    public function getCodigoBarrasNumEnvioLecturaPlataformas(): ?string
    {
        return $this->CodigoBarrasNumEnvioLecturaPlataformas;
    }

    /**
     * Set CodigoBarrasNumEnvioLecturaPlataformas value
     *
     * @return \StructType\TransmitirEnvioECResponse
     */
    public function setCodigoBarrasNumEnvioLecturaPlataformas(?string $codigoBarrasNumEnvioLecturaPlataformas = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoBarrasNumEnvioLecturaPlataformas) && ! is_string($codigoBarrasNumEnvioLecturaPlataformas)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoBarrasNumEnvioLecturaPlataformas, true), gettype($codigoBarrasNumEnvioLecturaPlataformas)), __LINE__);
        }
        $this->CodigoBarrasNumEnvioLecturaPlataformas = $codigoBarrasNumEnvioLecturaPlataformas;

        return $this;
    }
}
