<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoRequest;
use Kavinsky\MRW\Types\ArrayType\ArrayOfNotificacionRequest;
use WsdlToPhp\PackageBase\AbstractStructBase;

#[AllowDynamicProperties]
class DatosServicioRequest extends AbstractStructBase
{
    protected ?string $Fecha = null;

    protected ?string $NumeroAlbaran = null;

    protected ?string $Referencia = null;

    protected ?string $CorrelacionRef = null;

    protected ?string $EnFranquicia = null;

    protected ?string $CodigoServicio = null;

    protected ?string $DescripcionServicio = null;

    protected ?string $Frecuencia = null;

    protected ?string $CodigoPromocion = null;

    protected ?string $NumeroSobre = null;

    protected ?ArrayOfBultoRequest $Bultos = null;

    protected ?string $NumeroBultos = null;

    protected ?string $Peso = null;

    protected ?string $NumeroPuentes = null;

    protected ?string $EntregaSabado = null;

    protected ?string $Entrega830 = null;

    protected ?string $EntregaPartirDe = null;

    protected ?string $Gestion = null;

    protected ?string $Retorno = null;

    protected ?string $CodigoServicioRetorno = null;

    protected ?string $ConfirmacionInmediata = null;

    protected ?string $Reembolso = null;

    protected ?string $ImporteReembolso = null;

    protected ?string $TipoMercancia = null;

    protected ?string $ValorDeclarado = null;

    protected ?string $ServicioEspecial = null;

    protected ?string $CodigoMoneda = null;

    protected ?string $ValorEstadistico = null;

    protected ?string $ValorEstadisticoEuros = null;

    protected ?ArrayOfNotificacionRequest $Notificaciones = null;

    protected ?SeguroOpcionalRequest $SeguroOpcional = null;

    protected ?string $TramoHorario = null;

    protected ?string $PortesDebidos = null;

    protected ?string $Mascara_Tipos = null;

    protected ?string $Mascara_Campos = null;

    protected ?string $Asistente = null;

    protected ?string $Burofax = null;

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

    public function getFecha(): ?string
    {
        return $this->Fecha;
    }

    public function setFecha(?string $fecha = null): self
    {
        // validation for constraint: string
        $this->Fecha = $fecha;

        return $this;
    }

    public function getNumeroAlbaran(): ?string
    {
        return $this->NumeroAlbaran;
    }

    public function setNumeroAlbaran(?string $numeroAlbaran = null): self
    {
        // validation for constraint: string
        $this->NumeroAlbaran = $numeroAlbaran;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    public function setReferencia(?string $referencia = null): self
    {
        // validation for constraint: string
        $this->Referencia = $referencia;

        return $this;
    }

    public function getCorrelacionRef(): ?string
    {
        return $this->CorrelacionRef;
    }

    public function setCorrelacionRef(?string $correlacionRef = null): self
    {
        // validation for constraint: string
        $this->CorrelacionRef = $correlacionRef;

        return $this;
    }

    public function getEnFranquicia(): ?string
    {
        return $this->EnFranquicia;
    }

    public function setEnFranquicia(?string $enFranquicia = null): self
    {
        // validation for constraint: string
        $this->EnFranquicia = $enFranquicia;

        return $this;
    }

    public function getCodigoServicio(): ?string
    {
        return $this->CodigoServicio;
    }

    public function setCodigoServicio(?string $codigoServicio = null): self
    {
        // validation for constraint: string
        $this->CodigoServicio = $codigoServicio;

        return $this;
    }

    public function getDescripcionServicio(): ?string
    {
        return $this->DescripcionServicio;
    }

    public function setDescripcionServicio(?string $descripcionServicio = null): self
    {
        // validation for constraint: string
        $this->DescripcionServicio = $descripcionServicio;

        return $this;
    }

    public function getFrecuencia(): ?string
    {
        return $this->Frecuencia;
    }

    public function setFrecuencia(?string $frecuencia = null): self
    {
        // validation for constraint: string
        $this->Frecuencia = $frecuencia;

        return $this;
    }

    public function getCodigoPromocion(): ?string
    {
        return $this->CodigoPromocion;
    }

    public function setCodigoPromocion(?string $codigoPromocion = null): self
    {
        // validation for constraint: string
        $this->CodigoPromocion = $codigoPromocion;

        return $this;
    }

    public function getNumeroSobre(): ?string
    {
        return $this->NumeroSobre;
    }

    public function setNumeroSobre(?string $numeroSobre = null): self
    {
        // validation for constraint: string
        $this->NumeroSobre = $numeroSobre;

        return $this;
    }

    public function getBultos(): ?ArrayOfBultoRequest
    {
        return $this->Bultos;
    }

    public function setBultos(?ArrayOfBultoRequest $bultos = null): self
    {
        $this->Bultos = $bultos;

        return $this;
    }

    public function getNumeroBultos(): ?string
    {
        return $this->NumeroBultos;
    }

    public function setNumeroBultos(?string $numeroBultos = null): self
    {
        // validation for constraint: string
        $this->NumeroBultos = $numeroBultos;

        return $this;
    }

    public function getPeso(): ?string
    {
        return $this->Peso;
    }

    public function setPeso(?string $peso = null): self
    {
        // validation for constraint: string
        $this->Peso = $peso;

        return $this;
    }

    public function getNumeroPuentes(): ?string
    {
        return $this->NumeroPuentes;
    }

    public function setNumeroPuentes(?string $numeroPuentes = null): self
    {
        // validation for constraint: string
        $this->NumeroPuentes = $numeroPuentes;

        return $this;
    }

    public function getEntregaSabado(): ?string
    {
        return $this->EntregaSabado;
    }

    public function setEntregaSabado(?string $entregaSabado = null): self
    {
        // validation for constraint: string
        $this->EntregaSabado = $entregaSabado;

        return $this;
    }

    public function getEntrega830(): ?string
    {
        return $this->Entrega830;
    }

    public function setEntrega830(?string $entrega830 = null): self
    {
        // validation for constraint: string
        $this->Entrega830 = $entrega830;

        return $this;
    }

    public function getEntregaPartirDe(): ?string
    {
        return $this->EntregaPartirDe;
    }

    public function setEntregaPartirDe(?string $entregaPartirDe = null): self
    {
        // validation for constraint: string
        $this->EntregaPartirDe = $entregaPartirDe;

        return $this;
    }

    public function getGestion(): ?string
    {
        return $this->Gestion;
    }

    public function setGestion(?string $gestion = null): self
    {
        // validation for constraint: string
        $this->Gestion = $gestion;

        return $this;
    }

    public function getRetorno(): ?string
    {
        return $this->Retorno;
    }

    public function setRetorno(?string $retorno = null): self
    {
        // validation for constraint: string
        $this->Retorno = $retorno;

        return $this;
    }

    public function getCodigoServicioRetorno(): ?string
    {
        return $this->CodigoServicioRetorno;
    }

    public function setCodigoServicioRetorno(?string $codigoServicioRetorno = null): self
    {
        // validation for constraint: string
        $this->CodigoServicioRetorno = $codigoServicioRetorno;

        return $this;
    }

    public function getConfirmacionInmediata(): ?string
    {
        return $this->ConfirmacionInmediata;
    }

    public function setConfirmacionInmediata(?string $confirmacionInmediata = null): self
    {
        // validation for constraint: string
        $this->ConfirmacionInmediata = $confirmacionInmediata;

        return $this;
    }

    public function getReembolso(): ?string
    {
        return $this->Reembolso;
    }

    public function setReembolso(?string $reembolso = null): self
    {
        // validation for constraint: string
        $this->Reembolso = $reembolso;

        return $this;
    }

    public function getImporteReembolso(): ?string
    {
        return $this->ImporteReembolso;
    }

    public function setImporteReembolso(?string $importeReembolso = null): self
    {
        // validation for constraint: string
        $this->ImporteReembolso = $importeReembolso;

        return $this;
    }

    public function getTipoMercancia(): ?string
    {
        return $this->TipoMercancia;
    }

    public function setTipoMercancia(?string $tipoMercancia = null): self
    {
        // validation for constraint: string
        $this->TipoMercancia = $tipoMercancia;

        return $this;
    }

    public function getValorDeclarado(): ?string
    {
        return $this->ValorDeclarado;
    }

    public function setValorDeclarado(?string $valorDeclarado = null): self
    {
        // validation for constraint: string
        $this->ValorDeclarado = $valorDeclarado;

        return $this;
    }

    public function getServicioEspecial(): ?string
    {
        return $this->ServicioEspecial;
    }

    public function setServicioEspecial(?string $servicioEspecial = null): self
    {
        // validation for constraint: string
        $this->ServicioEspecial = $servicioEspecial;

        return $this;
    }

    public function getCodigoMoneda(): ?string
    {
        return $this->CodigoMoneda;
    }

    public function setCodigoMoneda(?string $codigoMoneda = null): self
    {
        // validation for constraint: string
        $this->CodigoMoneda = $codigoMoneda;

        return $this;
    }

    public function getValorEstadistico(): ?string
    {
        return $this->ValorEstadistico;
    }

    public function setValorEstadistico(?string $valorEstadistico = null): self
    {
        // validation for constraint: string
        $this->ValorEstadistico = $valorEstadistico;

        return $this;
    }

    public function getValorEstadisticoEuros(): ?string
    {
        return $this->ValorEstadisticoEuros;
    }

    public function setValorEstadisticoEuros(?string $valorEstadisticoEuros = null): self
    {
        // validation for constraint: string
        $this->ValorEstadisticoEuros = $valorEstadisticoEuros;

        return $this;
    }

    public function getNotificaciones(): ?ArrayOfNotificacionRequest
    {
        return $this->Notificaciones;
    }

    public function setNotificaciones(?ArrayOfNotificacionRequest $notificaciones = null): self
    {
        $this->Notificaciones = $notificaciones;

        return $this;
    }

    public function getSeguroOpcional(): ?SeguroOpcionalRequest
    {
        return $this->SeguroOpcional;
    }

    public function setSeguroOpcional(?SeguroOpcionalRequest $seguroOpcional = null): self
    {
        $this->SeguroOpcional = $seguroOpcional;

        return $this;
    }

    public function getTramoHorario(): ?string
    {
        return $this->TramoHorario;
    }

    public function setTramoHorario(?string $tramoHorario = null): self
    {
        // validation for constraint: string
        $this->TramoHorario = $tramoHorario;

        return $this;
    }

    public function getPortesDebidos(): ?string
    {
        return $this->PortesDebidos;
    }

    public function setPortesDebidos(?string $portesDebidos = null): self
    {
        // validation for constraint: string
        $this->PortesDebidos = $portesDebidos;

        return $this;
    }

    public function getMascara_Tipos(): ?string
    {
        return $this->Mascara_Tipos;
    }

    public function setMascara_Tipos(?string $mascara_Tipos = null): self
    {
        // validation for constraint: string
        $this->Mascara_Tipos = $mascara_Tipos;

        return $this;
    }

    public function getMascara_Campos(): ?string
    {
        return $this->Mascara_Campos;
    }

    public function setMascara_Campos(?string $mascara_Campos = null): self
    {
        // validation for constraint: string
        $this->Mascara_Campos = $mascara_Campos;

        return $this;
    }

    public function getAsistente(): ?string
    {
        return $this->Asistente;
    }

    public function setAsistente(?string $asistente = null): self
    {
        // validation for constraint: string
        $this->Asistente = $asistente;

        return $this;
    }

    public function getBurofax(): ?string
    {
        return $this->Burofax;
    }

    public function setBurofax(?string $burofax = null): self
    {
        // validation for constraint: string
        $this->Burofax = $burofax;

        return $this;
    }
}
