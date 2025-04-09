<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfBultoRequest;

#[AllowDynamicProperties]
class TransmitirEnvioECRequest extends BaseRequest
{
    protected ?DatosRemitenteRequest $DatosRecogida = null;

    protected ?string $Fecha = null;

    protected ?string $NumeroAlbaran = null;

    protected ?string $Nombre = null;

    protected ?string $VerificacionDireccion = null;

    protected ?string $Via = null;

    protected ?string $Direccion = null;

    protected ?string $NumeroDireccion = null;

    protected ?string $RestoDireccion = null;

    protected ?string $CodigoPostal = null;

    protected ?string $Poblacion = null;

    protected ?string $EnFranquicia = null;

    protected ?string $SMSRecogida = null;

    protected ?string $SMSEntrega = null;

    protected ?string $Referencia = null;

    protected ?string $Servicio = null;

    protected ?ArrayOfBultoRequest $ListaBultos = null;

    protected ?string $Bultos = null;

    protected ?string $Kilos = null;

    protected ?string $Puentes = null;

    protected ?string $Nif = null;

    protected ?string $Reembolso = null;

    protected ?string $ComisionReembolso = null;

    protected ?string $ImporteReembolso = null;

    protected ?string $Mercancia = null;

    protected ?string $ValorDeclarado = null;

    protected ?string $AtencionDe = null;

    protected ?string $Telefono = null;

    protected ?string $Observaciones = null;

    protected ?string $EntregaPartirDe = null;

    protected ?string $ConfirmacionInmediata = null;

    protected ?string $Retorno = null;

    protected ?string $Gestion = null;

    protected ?string $EntregaSabado = null;

    protected ?string $Entrega830 = null;

    protected ?string $CodigoPromocion = null;

    protected ?string $NumeroSobre = null;

    protected ?string $Frecuencia = null;

    protected ?string $TipoNotificacion = null;

    protected ?string $Notificacion1 = null;

    protected ?string $Notificacion2 = null;

    protected ?string $MailSMS1 = null;

    protected ?string $MailSMS2 = null;

    protected ?string $TramoHorario = null;

    protected ?string $PortesDebidos = null;

    protected ?SeguroOpcionalRequest $SeguroOpcional = null;

    protected ?string $Mascara_Tipos = null;

    protected ?string $Mascara_Campos = null;

    protected ?string $Asistente = null;

    public function __construct(?DatosRemitenteRequest $datosRecogida = null, ?string $fecha = null, ?string $numeroAlbaran = null, ?string $nombre = null, ?string $verificacionDireccion = null, ?string $via = null, ?string $direccion = null, ?string $numeroDireccion = null, ?string $restoDireccion = null, ?string $codigoPostal = null, ?string $poblacion = null, ?string $enFranquicia = null, ?string $sMSRecogida = null, ?string $sMSEntrega = null, ?string $referencia = null, ?string $servicio = null, ?ArrayOfBultoRequest $listaBultos = null, ?string $bultos = null, ?string $kilos = null, ?string $puentes = null, ?string $nif = null, ?string $reembolso = null, ?string $comisionReembolso = null, ?string $importeReembolso = null, ?string $mercancia = null, ?string $valorDeclarado = null, ?string $atencionDe = null, ?string $telefono = null, ?string $observaciones = null, ?string $entregaPartirDe = null, ?string $confirmacionInmediata = null, ?string $retorno = null, ?string $gestion = null, ?string $entregaSabado = null, ?string $entrega830 = null, ?string $codigoPromocion = null, ?string $numeroSobre = null, ?string $frecuencia = null, ?string $tipoNotificacion = null, ?string $notificacion1 = null, ?string $notificacion2 = null, ?string $mailSMS1 = null, ?string $mailSMS2 = null, ?string $tramoHorario = null, ?string $portesDebidos = null, ?SeguroOpcionalRequest $seguroOpcional = null, ?string $mascara_Tipos = null, ?string $mascara_Campos = null, ?string $asistente = null)
    {
        $this
            ->setDatosRecogida($datosRecogida)
            ->setFecha($fecha)
            ->setNumeroAlbaran($numeroAlbaran)
            ->setNombre($nombre)
            ->setVerificacionDireccion($verificacionDireccion)
            ->setVia($via)
            ->setDireccion($direccion)
            ->setNumeroDireccion($numeroDireccion)
            ->setRestoDireccion($restoDireccion)
            ->setCodigoPostal($codigoPostal)
            ->setPoblacion($poblacion)
            ->setEnFranquicia($enFranquicia)
            ->setSMSRecogida($sMSRecogida)
            ->setSMSEntrega($sMSEntrega)
            ->setReferencia($referencia)
            ->setServicio($servicio)
            ->setListaBultos($listaBultos)
            ->setBultos($bultos)
            ->setKilos($kilos)
            ->setPuentes($puentes)
            ->setNif($nif)
            ->setReembolso($reembolso)
            ->setComisionReembolso($comisionReembolso)
            ->setImporteReembolso($importeReembolso)
            ->setMercancia($mercancia)
            ->setValorDeclarado($valorDeclarado)
            ->setAtencionDe($atencionDe)
            ->setTelefono($telefono)
            ->setObservaciones($observaciones)
            ->setEntregaPartirDe($entregaPartirDe)
            ->setConfirmacionInmediata($confirmacionInmediata)
            ->setRetorno($retorno)
            ->setGestion($gestion)
            ->setEntregaSabado($entregaSabado)
            ->setEntrega830($entrega830)
            ->setCodigoPromocion($codigoPromocion)
            ->setNumeroSobre($numeroSobre)
            ->setFrecuencia($frecuencia)
            ->setTipoNotificacion($tipoNotificacion)
            ->setNotificacion1($notificacion1)
            ->setNotificacion2($notificacion2)
            ->setMailSMS1($mailSMS1)
            ->setMailSMS2($mailSMS2)
            ->setTramoHorario($tramoHorario)
            ->setPortesDebidos($portesDebidos)
            ->setSeguroOpcional($seguroOpcional)
            ->setMascara_Tipos($mascara_Tipos)
            ->setMascara_Campos($mascara_Campos)
            ->setAsistente($asistente);
    }

    public function getDatosRecogida(): ?DatosRemitenteRequest
    {
        return $this->DatosRecogida;
    }

    public function setDatosRecogida(?DatosRemitenteRequest $datosRecogida = null): self
    {
        $this->DatosRecogida = $datosRecogida;

        return $this;
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

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(?string $nombre = null): self
    {
        // validation for constraint: string
        $this->Nombre = $nombre;

        return $this;
    }

    public function getVerificacionDireccion(): ?string
    {
        return $this->VerificacionDireccion;
    }

    public function setVerificacionDireccion(?string $verificacionDireccion = null): self
    {
        // validation for constraint: string
        $this->VerificacionDireccion = $verificacionDireccion;

        return $this;
    }

    public function getVia(): ?string
    {
        return $this->Via;
    }

    public function setVia(?string $via = null): self
    {
        // validation for constraint: string
        $this->Via = $via;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function setDireccion(?string $direccion = null): self
    {
        // validation for constraint: string
        $this->Direccion = $direccion;

        return $this;
    }

    public function getNumeroDireccion(): ?string
    {
        return $this->NumeroDireccion;
    }

    public function setNumeroDireccion(?string $numeroDireccion = null): self
    {
        // validation for constraint: string
        $this->NumeroDireccion = $numeroDireccion;

        return $this;
    }

    public function getRestoDireccion(): ?string
    {
        return $this->RestoDireccion;
    }

    public function setRestoDireccion(?string $restoDireccion = null): self
    {
        // validation for constraint: string
        $this->RestoDireccion = $restoDireccion;

        return $this;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    public function setCodigoPostal(?string $codigoPostal = null): self
    {
        // validation for constraint: string
        $this->CodigoPostal = $codigoPostal;

        return $this;
    }

    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    public function setPoblacion(?string $poblacion = null): self
    {
        // validation for constraint: string
        $this->Poblacion = $poblacion;

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

    public function getSMSRecogida(): ?string
    {
        return $this->SMSRecogida;
    }

    public function setSMSRecogida(?string $sMSRecogida = null): self
    {
        // validation for constraint: string
        $this->SMSRecogida = $sMSRecogida;

        return $this;
    }

    public function getSMSEntrega(): ?string
    {
        return $this->SMSEntrega;
    }

    public function setSMSEntrega(?string $sMSEntrega = null): self
    {
        // validation for constraint: string
        $this->SMSEntrega = $sMSEntrega;

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

    public function getServicio(): ?string
    {
        return $this->Servicio;
    }

    public function setServicio(?string $servicio = null): self
    {
        // validation for constraint: string
        $this->Servicio = $servicio;

        return $this;
    }

    public function getListaBultos(): ?ArrayOfBultoRequest
    {
        return $this->ListaBultos;
    }

    public function setListaBultos(?ArrayOfBultoRequest $listaBultos = null): self
    {
        $this->ListaBultos = $listaBultos;

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

    public function getKilos(): ?string
    {
        return $this->Kilos;
    }

    public function setKilos(?string $kilos = null): self
    {
        // validation for constraint: string
        $this->Kilos = $kilos;

        return $this;
    }

    public function getPuentes(): ?string
    {
        return $this->Puentes;
    }

    public function setPuentes(?string $puentes = null): self
    {
        // validation for constraint: string
        $this->Puentes = $puentes;

        return $this;
    }

    public function getNif(): ?string
    {
        return $this->Nif;
    }

    public function setNif(?string $nif = null): self
    {
        // validation for constraint: string
        $this->Nif = $nif;

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

    public function getComisionReembolso(): ?string
    {
        return $this->ComisionReembolso;
    }

    public function setComisionReembolso(?string $comisionReembolso = null): self
    {
        // validation for constraint: string
        $this->ComisionReembolso = $comisionReembolso;

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

    public function getMercancia(): ?string
    {
        return $this->Mercancia;
    }

    public function setMercancia(?string $mercancia = null): self
    {
        // validation for constraint: string
        $this->Mercancia = $mercancia;

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

    public function getAtencionDe(): ?string
    {
        return $this->AtencionDe;
    }

    public function setAtencionDe(?string $atencionDe = null): self
    {
        // validation for constraint: string
        $this->AtencionDe = $atencionDe;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function setTelefono(?string $telefono = null): self
    {
        // validation for constraint: string
        $this->Telefono = $telefono;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->Observaciones;
    }

    public function setObservaciones(?string $observaciones = null): self
    {
        // validation for constraint: string
        $this->Observaciones = $observaciones;

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

    public function getTipoNotificacion(): ?string
    {
        return $this->TipoNotificacion;
    }

    public function setTipoNotificacion(?string $tipoNotificacion = null): self
    {
        // validation for constraint: string
        $this->TipoNotificacion = $tipoNotificacion;

        return $this;
    }

    public function getNotificacion1(): ?string
    {
        return $this->Notificacion1;
    }

    public function setNotificacion1(?string $notificacion1 = null): self
    {
        // validation for constraint: string
        $this->Notificacion1 = $notificacion1;

        return $this;
    }

    public function getNotificacion2(): ?string
    {
        return $this->Notificacion2;
    }

    public function setNotificacion2(?string $notificacion2 = null): self
    {
        // validation for constraint: string
        $this->Notificacion2 = $notificacion2;

        return $this;
    }

    public function getMailSMS1(): ?string
    {
        return $this->MailSMS1;
    }

    public function setMailSMS1(?string $mailSMS1 = null): self
    {
        // validation for constraint: string
        $this->MailSMS1 = $mailSMS1;

        return $this;
    }

    public function getMailSMS2(): ?string
    {
        return $this->MailSMS2;
    }

    public function setMailSMS2(?string $mailSMS2 = null): self
    {
        // validation for constraint: string
        $this->MailSMS2 = $mailSMS2;

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

    public function getSeguroOpcional(): ?SeguroOpcionalRequest
    {
        return $this->SeguroOpcional;
    }

    public function setSeguroOpcional(?SeguroOpcionalRequest $seguroOpcional = null): self
    {
        $this->SeguroOpcional = $seguroOpcional;

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
}
