<?php

namespace Kavinsky\MRW\Type;

class TransmitirEnvioRequest extends BaseRequest
{
    private ?string $Fecha = null;

    private ?string $Nombre = null;

    private ?string $VerificacionDireccion = null;

    private ?string $Via = null;

    private ?string $Direccion = null;

    private ?string $NumeroDireccion = null;

    private ?string $RestoDireccion = null;

    private ?string $CodigoPostal = null;

    private ?string $Poblacion = null;

    private ?string $EnFranquicia = null;

    private ?string $SMSRecogida = null;

    private ?string $SMSEntrega = null;

    private ?string $Referencia = null;

    private ?string $CorrelacionRef = null;

    private ?string $Servicio = null;

    private ?string $Bultos = null;

    private ?string $Kilos = null;

    private ?string $Puentes = null;

    private ?string $Nif = null;

    private ?string $Reembolso = null;

    private ?string $ComisionReembolso = null;

    private ?string $ImporteReembolso = null;

    private ?string $Mercancia = null;

    private ?string $ValorDeclarado = null;

    private ?string $AtencionDe = null;

    private ?string $Telefono = null;

    private ?string $Observaciones = null;

    private ?string $EntregaPartirDe = null;

    private ?string $ConfirmacionInmediata = null;

    private ?string $Retorno = null;

    private ?string $Gestion = null;

    private ?string $EntregaSabado = null;

    private ?string $Entrega830 = null;

    private ?string $CodigoPromocion = null;

    private ?string $NumeroSobre = null;

    private ?string $Frecuencia = null;

    private ?string $TipoNotificacion = null;

    private ?string $Notificacion1 = null;

    private ?string $Notificacion2 = null;

    private ?string $MailSMS1 = null;

    private ?string $MailSMS2 = null;

    private ?string $TramoHorario = null;

    private ?string $PortesDebidos = null;

    private ?string $Mascara_Tipos = null;

    private ?string $Mascara_Campos = null;

    private ?string $Asistente = null;

    public function getFecha(): ?string
    {
        return $this->Fecha;
    }

    public function withFecha(?string $Fecha): static
    {
        $new = clone $this;
        $new->Fecha = $Fecha;

        return $new;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function withNombre(?string $Nombre): static
    {
        $new = clone $this;
        $new->Nombre = $Nombre;

        return $new;
    }

    public function getVerificacionDireccion(): ?string
    {
        return $this->VerificacionDireccion;
    }

    public function withVerificacionDireccion(?string $VerificacionDireccion): static
    {
        $new = clone $this;
        $new->VerificacionDireccion = $VerificacionDireccion;

        return $new;
    }

    public function getVia(): ?string
    {
        return $this->Via;
    }

    public function withVia(?string $Via): static
    {
        $new = clone $this;
        $new->Via = $Via;

        return $new;
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function withDireccion(?string $Direccion): static
    {
        $new = clone $this;
        $new->Direccion = $Direccion;

        return $new;
    }

    public function getNumeroDireccion(): ?string
    {
        return $this->NumeroDireccion;
    }

    public function withNumeroDireccion(?string $NumeroDireccion): static
    {
        $new = clone $this;
        $new->NumeroDireccion = $NumeroDireccion;

        return $new;
    }

    public function getRestoDireccion(): ?string
    {
        return $this->RestoDireccion;
    }

    public function withRestoDireccion(?string $RestoDireccion): static
    {
        $new = clone $this;
        $new->RestoDireccion = $RestoDireccion;

        return $new;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->CodigoPostal;
    }

    public function withCodigoPostal(?string $CodigoPostal): static
    {
        $new = clone $this;
        $new->CodigoPostal = $CodigoPostal;

        return $new;
    }

    public function getPoblacion(): ?string
    {
        return $this->Poblacion;
    }

    public function withPoblacion(?string $Poblacion): static
    {
        $new = clone $this;
        $new->Poblacion = $Poblacion;

        return $new;
    }

    public function getEnFranquicia(): ?string
    {
        return $this->EnFranquicia;
    }

    public function withEnFranquicia(?string $EnFranquicia): static
    {
        $new = clone $this;
        $new->EnFranquicia = $EnFranquicia;

        return $new;
    }

    public function getSMSRecogida(): ?string
    {
        return $this->SMSRecogida;
    }

    public function withSMSRecogida(?string $SMSRecogida): static
    {
        $new = clone $this;
        $new->SMSRecogida = $SMSRecogida;

        return $new;
    }

    public function getSMSEntrega(): ?string
    {
        return $this->SMSEntrega;
    }

    public function withSMSEntrega(?string $SMSEntrega): static
    {
        $new = clone $this;
        $new->SMSEntrega = $SMSEntrega;

        return $new;
    }

    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }

    public function withReferencia(?string $Referencia): static
    {
        $new = clone $this;
        $new->Referencia = $Referencia;

        return $new;
    }

    public function getCorrelacionRef(): ?string
    {
        return $this->CorrelacionRef;
    }

    public function withCorrelacionRef(?string $CorrelacionRef): static
    {
        $new = clone $this;
        $new->CorrelacionRef = $CorrelacionRef;

        return $new;
    }

    public function getServicio(): ?string
    {
        return $this->Servicio;
    }

    public function withServicio(?string $Servicio): static
    {
        $new = clone $this;
        $new->Servicio = $Servicio;

        return $new;
    }

    public function getBultos(): ?string
    {
        return $this->Bultos;
    }

    public function withBultos(?string $Bultos): static
    {
        $new = clone $this;
        $new->Bultos = $Bultos;

        return $new;
    }

    public function getKilos(): ?string
    {
        return $this->Kilos;
    }

    public function withKilos(?string $Kilos): static
    {
        $new = clone $this;
        $new->Kilos = $Kilos;

        return $new;
    }

    public function getPuentes(): ?string
    {
        return $this->Puentes;
    }

    public function withPuentes(?string $Puentes): static
    {
        $new = clone $this;
        $new->Puentes = $Puentes;

        return $new;
    }

    public function getNif(): ?string
    {
        return $this->Nif;
    }

    public function withNif(?string $Nif): static
    {
        $new = clone $this;
        $new->Nif = $Nif;

        return $new;
    }

    public function getReembolso(): ?string
    {
        return $this->Reembolso;
    }

    public function withReembolso(?string $Reembolso): static
    {
        $new = clone $this;
        $new->Reembolso = $Reembolso;

        return $new;
    }

    public function getComisionReembolso(): ?string
    {
        return $this->ComisionReembolso;
    }

    public function withComisionReembolso(?string $ComisionReembolso): static
    {
        $new = clone $this;
        $new->ComisionReembolso = $ComisionReembolso;

        return $new;
    }

    public function getImporteReembolso(): ?string
    {
        return $this->ImporteReembolso;
    }

    public function withImporteReembolso(?string $ImporteReembolso): static
    {
        $new = clone $this;
        $new->ImporteReembolso = $ImporteReembolso;

        return $new;
    }

    public function getMercancia(): ?string
    {
        return $this->Mercancia;
    }

    public function withMercancia(?string $Mercancia): static
    {
        $new = clone $this;
        $new->Mercancia = $Mercancia;

        return $new;
    }

    public function getValorDeclarado(): ?string
    {
        return $this->ValorDeclarado;
    }

    public function withValorDeclarado(?string $ValorDeclarado): static
    {
        $new = clone $this;
        $new->ValorDeclarado = $ValorDeclarado;

        return $new;
    }

    public function getAtencionDe(): ?string
    {
        return $this->AtencionDe;
    }

    public function withAtencionDe(?string $AtencionDe): static
    {
        $new = clone $this;
        $new->AtencionDe = $AtencionDe;

        return $new;
    }

    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }

    public function withTelefono(?string $Telefono): static
    {
        $new = clone $this;
        $new->Telefono = $Telefono;

        return $new;
    }

    public function getObservaciones(): ?string
    {
        return $this->Observaciones;
    }

    public function withObservaciones(?string $Observaciones): static
    {
        $new = clone $this;
        $new->Observaciones = $Observaciones;

        return $new;
    }

    public function getEntregaPartirDe(): ?string
    {
        return $this->EntregaPartirDe;
    }

    public function withEntregaPartirDe(?string $EntregaPartirDe): static
    {
        $new = clone $this;
        $new->EntregaPartirDe = $EntregaPartirDe;

        return $new;
    }

    public function getConfirmacionInmediata(): ?string
    {
        return $this->ConfirmacionInmediata;
    }

    public function withConfirmacionInmediata(?string $ConfirmacionInmediata): static
    {
        $new = clone $this;
        $new->ConfirmacionInmediata = $ConfirmacionInmediata;

        return $new;
    }

    public function getRetorno(): ?string
    {
        return $this->Retorno;
    }

    public function withRetorno(?string $Retorno): static
    {
        $new = clone $this;
        $new->Retorno = $Retorno;

        return $new;
    }

    public function getGestion(): ?string
    {
        return $this->Gestion;
    }

    public function withGestion(?string $Gestion): static
    {
        $new = clone $this;
        $new->Gestion = $Gestion;

        return $new;
    }

    public function getEntregaSabado(): ?string
    {
        return $this->EntregaSabado;
    }

    public function withEntregaSabado(?string $EntregaSabado): static
    {
        $new = clone $this;
        $new->EntregaSabado = $EntregaSabado;

        return $new;
    }

    public function getEntrega830(): ?string
    {
        return $this->Entrega830;
    }

    public function withEntrega830(?string $Entrega830): static
    {
        $new = clone $this;
        $new->Entrega830 = $Entrega830;

        return $new;
    }

    public function getCodigoPromocion(): ?string
    {
        return $this->CodigoPromocion;
    }

    public function withCodigoPromocion(?string $CodigoPromocion): static
    {
        $new = clone $this;
        $new->CodigoPromocion = $CodigoPromocion;

        return $new;
    }

    public function getNumeroSobre(): ?string
    {
        return $this->NumeroSobre;
    }

    public function withNumeroSobre(?string $NumeroSobre): static
    {
        $new = clone $this;
        $new->NumeroSobre = $NumeroSobre;

        return $new;
    }

    public function getFrecuencia(): ?string
    {
        return $this->Frecuencia;
    }

    public function withFrecuencia(?string $Frecuencia): static
    {
        $new = clone $this;
        $new->Frecuencia = $Frecuencia;

        return $new;
    }

    public function getTipoNotificacion(): ?string
    {
        return $this->TipoNotificacion;
    }

    public function withTipoNotificacion(?string $TipoNotificacion): static
    {
        $new = clone $this;
        $new->TipoNotificacion = $TipoNotificacion;

        return $new;
    }

    public function getNotificacion1(): ?string
    {
        return $this->Notificacion1;
    }

    public function withNotificacion1(?string $Notificacion1): static
    {
        $new = clone $this;
        $new->Notificacion1 = $Notificacion1;

        return $new;
    }

    public function getNotificacion2(): ?string
    {
        return $this->Notificacion2;
    }

    public function withNotificacion2(?string $Notificacion2): static
    {
        $new = clone $this;
        $new->Notificacion2 = $Notificacion2;

        return $new;
    }

    public function getMailSMS1(): ?string
    {
        return $this->MailSMS1;
    }

    public function withMailSMS1(?string $MailSMS1): static
    {
        $new = clone $this;
        $new->MailSMS1 = $MailSMS1;

        return $new;
    }

    public function getMailSMS2(): ?string
    {
        return $this->MailSMS2;
    }

    public function withMailSMS2(?string $MailSMS2): static
    {
        $new = clone $this;
        $new->MailSMS2 = $MailSMS2;

        return $new;
    }

    public function getTramoHorario(): ?string
    {
        return $this->TramoHorario;
    }

    public function withTramoHorario(?string $TramoHorario): static
    {
        $new = clone $this;
        $new->TramoHorario = $TramoHorario;

        return $new;
    }

    public function getPortesDebidos(): ?string
    {
        return $this->PortesDebidos;
    }

    public function withPortesDebidos(?string $PortesDebidos): static
    {
        $new = clone $this;
        $new->PortesDebidos = $PortesDebidos;

        return $new;
    }

    public function getMascara_Tipos(): ?string
    {
        return $this->Mascara_Tipos;
    }

    public function withMascara_Tipos(?string $Mascara_Tipos): static
    {
        $new = clone $this;
        $new->Mascara_Tipos = $Mascara_Tipos;

        return $new;
    }

    public function getMascara_Campos(): ?string
    {
        return $this->Mascara_Campos;
    }

    public function withMascara_Campos(?string $Mascara_Campos): static
    {
        $new = clone $this;
        $new->Mascara_Campos = $Mascara_Campos;

        return $new;
    }

    public function getAsistente(): ?string
    {
        return $this->Asistente;
    }

    public function withAsistente(?string $Asistente): static
    {
        $new = clone $this;
        $new->Asistente = $Asistente;

        return $new;
    }
}
