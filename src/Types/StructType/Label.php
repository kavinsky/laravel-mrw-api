<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class Label extends AbstractStructBase
{
    protected int $KmRecogida;

    protected int $KmEntrega;

    protected ?string $FechaSolicitud = null;

    protected ?string $NumEnvio = null;

    protected ?string $NumEnvioLecturaPlataformas = null;

    protected ?string $CodigoClasificacionPlataformas = null;

    protected ?string $CodigoFranquiciaDestino = null;

    protected ?string $NombreFranquiciaDestino = null;

    protected ?string $CodigoSaca = null;

    protected ?string $NombreSaca = null;

    protected ?string $CodigoRuta = null;

    protected ?string $CodigoTipoCobro = null;

    protected ?string $DescripcionTipoCobro = null;

    protected ?string $CodigoTipoEnvio = null;

    protected ?string $Bultos = null;

    protected ?string $PesoExpedicion = null;

    protected ?string $BultoExpedicion = null;

    protected ?string $PesoBulto = null;

    protected ?string $NombreServicio = null;

    protected ?string $NombrePlanAccionSocial = null;

    protected ?string $DescripcionTipoRetorno = null;

    protected ?string $DescripcionTipoGestion = null;

    protected ?string $DescripcionEntregaSabado = null;

    protected ?string $ImporteTotalReembolso = null;

    protected ?string $DescripcionTipoMercancia = null;

    protected ?string $HoraMaximaEntrega = null;

    protected ?string $DescripcionConfirmacionInmediata = null;

    protected ?string $DescripcionRevisionEnFranquicia = null;

    protected ?string $CodigoBarrasNumEnvio = null;

    protected ?string $CodigoBarrasNumEnvioLecturaPlataformas = null;

    protected ?string $CodigoRutaReparto = null;

    protected ?string $CodigoBusqueda = null;

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

    public function getKmRecogida(): int
    {
        return $this->KmRecogida;
    }

    public function setKmRecogida(int $kmRecogida): self
    {

        $this->KmRecogida = $kmRecogida;

        return $this;
    }

    public function getKmEntrega(): int
    {
        return $this->KmEntrega;
    }

    public function setKmEntrega(int $kmEntrega): self
    {

        $this->KmEntrega = $kmEntrega;

        return $this;
    }

    public function getFechaSolicitud(): ?string
    {
        return $this->FechaSolicitud;
    }

    public function setFechaSolicitud(?string $fechaSolicitud = null): self
    {
        // validation for constraint: string
        $this->FechaSolicitud = $fechaSolicitud;

        return $this;
    }

    public function getNumEnvio(): ?string
    {
        return $this->NumEnvio;
    }

    public function setNumEnvio(?string $numEnvio = null): self
    {
        // validation for constraint: string
        $this->NumEnvio = $numEnvio;

        return $this;
    }

    public function getNumEnvioLecturaPlataformas(): ?string
    {
        return $this->NumEnvioLecturaPlataformas;
    }

    public function setNumEnvioLecturaPlataformas(?string $numEnvioLecturaPlataformas = null): self
    {
        // validation for constraint: string
        $this->NumEnvioLecturaPlataformas = $numEnvioLecturaPlataformas;

        return $this;
    }

    public function getCodigoClasificacionPlataformas(): ?string
    {
        return $this->CodigoClasificacionPlataformas;
    }

    public function setCodigoClasificacionPlataformas(?string $codigoClasificacionPlataformas = null): self
    {
        // validation for constraint: string
        $this->CodigoClasificacionPlataformas = $codigoClasificacionPlataformas;

        return $this;
    }

    public function getCodigoFranquiciaDestino(): ?string
    {
        return $this->CodigoFranquiciaDestino;
    }

    public function setCodigoFranquiciaDestino(?string $codigoFranquiciaDestino = null): self
    {
        // validation for constraint: string
        $this->CodigoFranquiciaDestino = $codigoFranquiciaDestino;

        return $this;
    }

    public function getNombreFranquiciaDestino(): ?string
    {
        return $this->NombreFranquiciaDestino;
    }

    public function setNombreFranquiciaDestino(?string $nombreFranquiciaDestino = null): self
    {
        // validation for constraint: string
        $this->NombreFranquiciaDestino = $nombreFranquiciaDestino;

        return $this;
    }

    public function getCodigoSaca(): ?string
    {
        return $this->CodigoSaca;
    }

    public function setCodigoSaca(?string $codigoSaca = null): self
    {
        // validation for constraint: string
        $this->CodigoSaca = $codigoSaca;

        return $this;
    }

    public function getNombreSaca(): ?string
    {
        return $this->NombreSaca;
    }

    public function setNombreSaca(?string $nombreSaca = null): self
    {
        // validation for constraint: string
        $this->NombreSaca = $nombreSaca;

        return $this;
    }

    public function getCodigoRuta(): ?string
    {
        return $this->CodigoRuta;
    }

    public function setCodigoRuta(?string $codigoRuta = null): self
    {
        // validation for constraint: string
        $this->CodigoRuta = $codigoRuta;

        return $this;
    }

    public function getCodigoTipoCobro(): ?string
    {
        return $this->CodigoTipoCobro;
    }

    public function setCodigoTipoCobro(?string $codigoTipoCobro = null): self
    {
        // validation for constraint: string
        $this->CodigoTipoCobro = $codigoTipoCobro;

        return $this;
    }

    public function getDescripcionTipoCobro(): ?string
    {
        return $this->DescripcionTipoCobro;
    }

    public function setDescripcionTipoCobro(?string $descripcionTipoCobro = null): self
    {
        // validation for constraint: string
        $this->DescripcionTipoCobro = $descripcionTipoCobro;

        return $this;
    }

    public function getCodigoTipoEnvio(): ?string
    {
        return $this->CodigoTipoEnvio;
    }

    public function setCodigoTipoEnvio(?string $codigoTipoEnvio = null): self
    {
        // validation for constraint: string
        $this->CodigoTipoEnvio = $codigoTipoEnvio;

        return $this;
    }

    public function getBultos(): ?string
    {
        return $this->Bultos;
    }

    public function setBultos(?string $bultos = null): self
    {
        // validation for constraint: string
        $this->Bultos = $bultos;

        return $this;
    }

    public function getPesoExpedicion(): ?string
    {
        return $this->PesoExpedicion;
    }

    public function setPesoExpedicion(?string $pesoExpedicion = null): self
    {
        // validation for constraint: string
        $this->PesoExpedicion = $pesoExpedicion;

        return $this;
    }

    public function getBultoExpedicion(): ?string
    {
        return $this->BultoExpedicion;
    }

    public function setBultoExpedicion(?string $bultoExpedicion = null): self
    {
        // validation for constraint: string
        $this->BultoExpedicion = $bultoExpedicion;

        return $this;
    }

    public function getPesoBulto(): ?string
    {
        return $this->PesoBulto;
    }

    public function setPesoBulto(?string $pesoBulto = null): self
    {
        // validation for constraint: string
        $this->PesoBulto = $pesoBulto;

        return $this;
    }

    public function getNombreServicio(): ?string
    {
        return $this->NombreServicio;
    }

    public function setNombreServicio(?string $nombreServicio = null): self
    {
        // validation for constraint: string
        $this->NombreServicio = $nombreServicio;

        return $this;
    }

    public function getNombrePlanAccionSocial(): ?string
    {
        return $this->NombrePlanAccionSocial;
    }

    public function setNombrePlanAccionSocial(?string $nombrePlanAccionSocial = null): self
    {
        // validation for constraint: string
        $this->NombrePlanAccionSocial = $nombrePlanAccionSocial;

        return $this;
    }

    public function getDescripcionTipoRetorno(): ?string
    {
        return $this->DescripcionTipoRetorno;
    }

    public function setDescripcionTipoRetorno(?string $descripcionTipoRetorno = null): self
    {
        // validation for constraint: string
        $this->DescripcionTipoRetorno = $descripcionTipoRetorno;

        return $this;
    }

    public function getDescripcionTipoGestion(): ?string
    {
        return $this->DescripcionTipoGestion;
    }

    public function setDescripcionTipoGestion(?string $descripcionTipoGestion = null): self
    {
        // validation for constraint: string
        $this->DescripcionTipoGestion = $descripcionTipoGestion;

        return $this;
    }

    public function getDescripcionEntregaSabado(): ?string
    {
        return $this->DescripcionEntregaSabado;
    }

    public function setDescripcionEntregaSabado(?string $descripcionEntregaSabado = null): self
    {
        // validation for constraint: string
        $this->DescripcionEntregaSabado = $descripcionEntregaSabado;

        return $this;
    }

    public function getImporteTotalReembolso(): ?string
    {
        return $this->ImporteTotalReembolso;
    }

    public function setImporteTotalReembolso(?string $importeTotalReembolso = null): self
    {
        // validation for constraint: string
        $this->ImporteTotalReembolso = $importeTotalReembolso;

        return $this;
    }

    public function getDescripcionTipoMercancia(): ?string
    {
        return $this->DescripcionTipoMercancia;
    }

    public function setDescripcionTipoMercancia(?string $descripcionTipoMercancia = null): self
    {
        // validation for constraint: string
        $this->DescripcionTipoMercancia = $descripcionTipoMercancia;

        return $this;
    }

    public function getHoraMaximaEntrega(): ?string
    {
        return $this->HoraMaximaEntrega;
    }

    public function setHoraMaximaEntrega(?string $horaMaximaEntrega = null): self
    {
        // validation for constraint: string
        $this->HoraMaximaEntrega = $horaMaximaEntrega;

        return $this;
    }

    public function getDescripcionConfirmacionInmediata(): ?string
    {
        return $this->DescripcionConfirmacionInmediata;
    }

    public function setDescripcionConfirmacionInmediata(?string $descripcionConfirmacionInmediata = null): self
    {
        // validation for constraint: string
        $this->DescripcionConfirmacionInmediata = $descripcionConfirmacionInmediata;

        return $this;
    }

    public function getDescripcionRevisionEnFranquicia(): ?string
    {
        return $this->DescripcionRevisionEnFranquicia;
    }

    public function setDescripcionRevisionEnFranquicia(?string $descripcionRevisionEnFranquicia = null): self
    {
        // validation for constraint: string
        $this->DescripcionRevisionEnFranquicia = $descripcionRevisionEnFranquicia;

        return $this;
    }

    public function getCodigoBarrasNumEnvio(): ?string
    {
        return $this->CodigoBarrasNumEnvio;
    }

    public function setCodigoBarrasNumEnvio(?string $codigoBarrasNumEnvio = null): self
    {
        // validation for constraint: string
        $this->CodigoBarrasNumEnvio = $codigoBarrasNumEnvio;

        return $this;
    }

    public function getCodigoBarrasNumEnvioLecturaPlataformas(): ?string
    {
        return $this->CodigoBarrasNumEnvioLecturaPlataformas;
    }

    public function setCodigoBarrasNumEnvioLecturaPlataformas(?string $codigoBarrasNumEnvioLecturaPlataformas = null): self
    {
        // validation for constraint: string
        $this->CodigoBarrasNumEnvioLecturaPlataformas = $codigoBarrasNumEnvioLecturaPlataformas;

        return $this;
    }

    public function getCodigoRutaReparto(): ?string
    {
        return $this->CodigoRutaReparto;
    }

    public function setCodigoRutaReparto(?string $codigoRutaReparto = null): self
    {
        // validation for constraint: string
        $this->CodigoRutaReparto = $codigoRutaReparto;

        return $this;
    }

    public function getCodigoBusqueda(): ?string
    {
        return $this->CodigoBusqueda;
    }

    public function setCodigoBusqueda(?string $codigoBusqueda = null): self
    {
        // validation for constraint: string
        $this->CodigoBusqueda = $codigoBusqueda;

        return $this;
    }
}
