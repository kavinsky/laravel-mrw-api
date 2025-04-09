<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Label StructType
 */
#[AllowDynamicProperties]
class Label extends AbstractStructBase
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
     * The CodigoClasificacionPlataformas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoClasificacionPlataformas = null;

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
     * The Bultos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Bultos = null;

    /**
     * The PesoExpedicion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PesoExpedicion = null;

    /**
     * The BultoExpedicion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BultoExpedicion = null;

    /**
     * The PesoBulto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PesoBulto = null;

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
     * The CodigoRutaReparto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoRutaReparto = null;

    /**
     * The CodigoBusqueda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodigoBusqueda = null;

    /**
     * Constructor method for Label
     *
     * @uses Label::setKmRecogida()
     * @uses Label::setKmEntrega()
     * @uses Label::setFechaSolicitud()
     * @uses Label::setNumEnvio()
     * @uses Label::setNumEnvioLecturaPlataformas()
     * @uses Label::setCodigoClasificacionPlataformas()
     * @uses Label::setCodigoFranquiciaDestino()
     * @uses Label::setNombreFranquiciaDestino()
     * @uses Label::setCodigoSaca()
     * @uses Label::setNombreSaca()
     * @uses Label::setCodigoRuta()
     * @uses Label::setCodigoTipoCobro()
     * @uses Label::setDescripcionTipoCobro()
     * @uses Label::setCodigoTipoEnvio()
     * @uses Label::setBultos()
     * @uses Label::setPesoExpedicion()
     * @uses Label::setBultoExpedicion()
     * @uses Label::setPesoBulto()
     * @uses Label::setNombreServicio()
     * @uses Label::setNombrePlanAccionSocial()
     * @uses Label::setDescripcionTipoRetorno()
     * @uses Label::setDescripcionTipoGestion()
     * @uses Label::setDescripcionEntregaSabado()
     * @uses Label::setImporteTotalReembolso()
     * @uses Label::setDescripcionTipoMercancia()
     * @uses Label::setHoraMaximaEntrega()
     * @uses Label::setDescripcionConfirmacionInmediata()
     * @uses Label::setDescripcionRevisionEnFranquicia()
     * @uses Label::setCodigoBarrasNumEnvio()
     * @uses Label::setCodigoBarrasNumEnvioLecturaPlataformas()
     * @uses Label::setCodigoRutaReparto()
     * @uses Label::setCodigoBusqueda()
     */
    public function __construct(int $kmRecogida, int $kmEntrega, ?string $fechaSolicitud = null, ?string $numEnvio = null, ?string $numEnvioLecturaPlataformas = null, ?string $codigoClasificacionPlataformas = null, ?string $codigoFranquiciaDestino = null, ?string $nombreFranquiciaDestino = null, ?string $codigoSaca = null, ?string $nombreSaca = null, ?string $codigoRuta = null, ?string $codigoTipoCobro = null, ?string $descripcionTipoCobro = null, ?string $codigoTipoEnvio = null, ?string $bultos = null, ?string $pesoExpedicion = null, ?string $bultoExpedicion = null, ?string $pesoBulto = null, ?string $nombreServicio = null, ?string $nombrePlanAccionSocial = null, ?string $descripcionTipoRetorno = null, ?string $descripcionTipoGestion = null, ?string $descripcionEntregaSabado = null, ?string $importeTotalReembolso = null, ?string $descripcionTipoMercancia = null, ?string $horaMaximaEntrega = null, ?string $descripcionConfirmacionInmediata = null, ?string $descripcionRevisionEnFranquicia = null, ?string $codigoBarrasNumEnvio = null, ?string $codigoBarrasNumEnvioLecturaPlataformas = null, ?string $codigoRutaReparto = null, ?string $codigoBusqueda = null)
    {
        $this
            ->setKmRecogida($kmRecogida)
            ->setKmEntrega($kmEntrega)
            ->setFechaSolicitud($fechaSolicitud)
            ->setNumEnvio($numEnvio)
            ->setNumEnvioLecturaPlataformas($numEnvioLecturaPlataformas)
            ->setCodigoClasificacionPlataformas($codigoClasificacionPlataformas)
            ->setCodigoFranquiciaDestino($codigoFranquiciaDestino)
            ->setNombreFranquiciaDestino($nombreFranquiciaDestino)
            ->setCodigoSaca($codigoSaca)
            ->setNombreSaca($nombreSaca)
            ->setCodigoRuta($codigoRuta)
            ->setCodigoTipoCobro($codigoTipoCobro)
            ->setDescripcionTipoCobro($descripcionTipoCobro)
            ->setCodigoTipoEnvio($codigoTipoEnvio)
            ->setBultos($bultos)
            ->setPesoExpedicion($pesoExpedicion)
            ->setBultoExpedicion($bultoExpedicion)
            ->setPesoBulto($pesoBulto)
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
            ->setCodigoBarrasNumEnvioLecturaPlataformas($codigoBarrasNumEnvioLecturaPlataformas)
            ->setCodigoRutaReparto($codigoRutaReparto)
            ->setCodigoBusqueda($codigoBusqueda);
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * Get FechaSolicitud value
     */
    public function getFechaSolicitud(): ?string
    {
        return $this->FechaSolicitud;
    }

    /**
     * Set FechaSolicitud value
     *
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * Get CodigoClasificacionPlataformas value
     */
    public function getCodigoClasificacionPlataformas(): ?string
    {
        return $this->CodigoClasificacionPlataformas;
    }

    /**
     * Set CodigoClasificacionPlataformas value
     *
     * @return \StructType\Label
     */
    public function setCodigoClasificacionPlataformas(?string $codigoClasificacionPlataformas = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoClasificacionPlataformas) && ! is_string($codigoClasificacionPlataformas)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoClasificacionPlataformas, true), gettype($codigoClasificacionPlataformas)), __LINE__);
        }
        $this->CodigoClasificacionPlataformas = $codigoClasificacionPlataformas;

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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * Get Bultos value
     */
    public function getBultos(): ?string
    {
        return $this->Bultos;
    }

    /**
     * Set Bultos value
     *
     * @return \StructType\Label
     */
    public function setBultos(?string $bultos = null): self
    {
        // validation for constraint: string
        if (! is_null($bultos) && ! is_string($bultos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bultos, true), gettype($bultos)), __LINE__);
        }
        $this->Bultos = $bultos;

        return $this;
    }

    /**
     * Get PesoExpedicion value
     */
    public function getPesoExpedicion(): ?string
    {
        return $this->PesoExpedicion;
    }

    /**
     * Set PesoExpedicion value
     *
     * @return \StructType\Label
     */
    public function setPesoExpedicion(?string $pesoExpedicion = null): self
    {
        // validation for constraint: string
        if (! is_null($pesoExpedicion) && ! is_string($pesoExpedicion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoExpedicion, true), gettype($pesoExpedicion)), __LINE__);
        }
        $this->PesoExpedicion = $pesoExpedicion;

        return $this;
    }

    /**
     * Get BultoExpedicion value
     */
    public function getBultoExpedicion(): ?string
    {
        return $this->BultoExpedicion;
    }

    /**
     * Set BultoExpedicion value
     *
     * @return \StructType\Label
     */
    public function setBultoExpedicion(?string $bultoExpedicion = null): self
    {
        // validation for constraint: string
        if (! is_null($bultoExpedicion) && ! is_string($bultoExpedicion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bultoExpedicion, true), gettype($bultoExpedicion)), __LINE__);
        }
        $this->BultoExpedicion = $bultoExpedicion;

        return $this;
    }

    /**
     * Get PesoBulto value
     */
    public function getPesoBulto(): ?string
    {
        return $this->PesoBulto;
    }

    /**
     * Set PesoBulto value
     *
     * @return \StructType\Label
     */
    public function setPesoBulto(?string $pesoBulto = null): self
    {
        // validation for constraint: string
        if (! is_null($pesoBulto) && ! is_string($pesoBulto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoBulto, true), gettype($pesoBulto)), __LINE__);
        }
        $this->PesoBulto = $pesoBulto;

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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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
     * @return \StructType\Label
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

    /**
     * Get CodigoRutaReparto value
     */
    public function getCodigoRutaReparto(): ?string
    {
        return $this->CodigoRutaReparto;
    }

    /**
     * Set CodigoRutaReparto value
     *
     * @return \StructType\Label
     */
    public function setCodigoRutaReparto(?string $codigoRutaReparto = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoRutaReparto) && ! is_string($codigoRutaReparto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoRutaReparto, true), gettype($codigoRutaReparto)), __LINE__);
        }
        $this->CodigoRutaReparto = $codigoRutaReparto;

        return $this;
    }

    /**
     * Get CodigoBusqueda value
     */
    public function getCodigoBusqueda(): ?string
    {
        return $this->CodigoBusqueda;
    }

    /**
     * Set CodigoBusqueda value
     *
     * @return \StructType\Label
     */
    public function setCodigoBusqueda(?string $codigoBusqueda = null): self
    {
        // validation for constraint: string
        if (! is_null($codigoBusqueda) && ! is_string($codigoBusqueda)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoBusqueda, true), gettype($codigoBusqueda)), __LINE__);
        }
        $this->CodigoBusqueda = $codigoBusqueda;

        return $this;
    }
}
