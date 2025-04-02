<?php

namespace Kavinsky\MRW\Type;

class DatosServicioRequest
{
    /**
     * @var null | string
     */
    private ?string $Fecha = null;

    /**
     * @var null | string
     */
    private ?string $NumeroAlbaran = null;

    /**
     * @var null | string
     */
    private ?string $Referencia = null;

    /**
     * @var null | string
     */
    private ?string $CorrelacionRef = null;

    /**
     * @var null | string
     */
    private ?string $EnFranquicia = null;

    /**
     * @var null | string
     */
    private ?string $CodigoServicio = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionServicio = null;

    /**
     * @var null | string
     */
    private ?string $Frecuencia = null;

    /**
     * @var null | string
     */
    private ?string $CodigoPromocion = null;

    /**
     * @var null | string
     */
    private ?string $NumeroSobre = null;

    /**
     * @var null | \Kavinsky\MRW\Type\ArrayOfBultoRequest
     */
    private ?\Kavinsky\MRW\Type\ArrayOfBultoRequest $Bultos = null;

    /**
     * @var null | string
     */
    private ?string $NumeroBultos = null;

    /**
     * @var null | string
     */
    private ?string $Peso = null;

    /**
     * @var null | string
     */
    private ?string $NumeroPuentes = null;

    /**
     * @var null | string
     */
    private ?string $EntregaSabado = null;

    /**
     * @var null | string
     */
    private ?string $Entrega830 = null;

    /**
     * @var null | string
     */
    private ?string $EntregaPartirDe = null;

    /**
     * @var null | string
     */
    private ?string $Gestion = null;

    /**
     * @var null | string
     */
    private ?string $Retorno = null;

    /**
     * @var null | string
     */
    private ?string $CodigoServicioRetorno = null;

    /**
     * @var null | string
     */
    private ?string $ConfirmacionInmediata = null;

    /**
     * @var null | string
     */
    private ?string $Reembolso = null;

    /**
     * @var null | string
     */
    private ?string $ImporteReembolso = null;

    /**
     * @var null | string
     */
    private ?string $TipoMercancia = null;

    /**
     * @var null | string
     */
    private ?string $ValorDeclarado = null;

    /**
     * @var null | string
     */
    private ?string $ServicioEspecial = null;

    /**
     * @var null | string
     */
    private ?string $CodigoMoneda = null;

    /**
     * @var null | string
     */
    private ?string $ValorEstadistico = null;

    /**
     * @var null | string
     */
    private ?string $ValorEstadisticoEuros = null;

    /**
     * @var null | \Kavinsky\MRW\Type\ArrayOfNotificacionRequest
     */
    private ?\Kavinsky\MRW\Type\ArrayOfNotificacionRequest $Notificaciones = null;

    /**
     * @var null | \Kavinsky\MRW\Type\SeguroOpcionalRequest
     */
    private ?\Kavinsky\MRW\Type\SeguroOpcionalRequest $SeguroOpcional = null;

    /**
     * @var null | string
     */
    private ?string $TramoHorario = null;

    /**
     * @var null | string
     */
    private ?string $PortesDebidos = null;

    /**
     * @var null | string
     */
    private ?string $Mascara_Tipos = null;

    /**
     * @var null | string
     */
    private ?string $Mascara_Campos = null;

    /**
     * @var null | string
     */
    private ?string $Asistente = null;

    /**
     * @var null | mixed
     */
    private mixed $Burofax = null;

    public function getFecha() : ?string
    {
        return $this->Fecha;
    }

    public function withFecha(?string $Fecha) : static
    {
        $new = clone $this;
        $new->Fecha = $Fecha;

        return $new;
    }

    public function getNumeroAlbaran() : ?string
    {
        return $this->NumeroAlbaran;
    }

    public function withNumeroAlbaran(?string $NumeroAlbaran) : static
    {
        $new = clone $this;
        $new->NumeroAlbaran = $NumeroAlbaran;

        return $new;
    }

    public function getReferencia() : ?string
    {
        return $this->Referencia;
    }

    public function withReferencia(?string $Referencia) : static
    {
        $new = clone $this;
        $new->Referencia = $Referencia;

        return $new;
    }

    public function getCorrelacionRef() : ?string
    {
        return $this->CorrelacionRef;
    }

    public function withCorrelacionRef(?string $CorrelacionRef) : static
    {
        $new = clone $this;
        $new->CorrelacionRef = $CorrelacionRef;

        return $new;
    }

    public function getEnFranquicia() : ?string
    {
        return $this->EnFranquicia;
    }

    public function withEnFranquicia(?string $EnFranquicia) : static
    {
        $new = clone $this;
        $new->EnFranquicia = $EnFranquicia;

        return $new;
    }

    public function getCodigoServicio() : ?string
    {
        return $this->CodigoServicio;
    }

    public function withCodigoServicio(?string $CodigoServicio) : static
    {
        $new = clone $this;
        $new->CodigoServicio = $CodigoServicio;

        return $new;
    }

    public function getDescripcionServicio() : ?string
    {
        return $this->DescripcionServicio;
    }

    public function withDescripcionServicio(?string $DescripcionServicio) : static
    {
        $new = clone $this;
        $new->DescripcionServicio = $DescripcionServicio;

        return $new;
    }

    public function getFrecuencia() : ?string
    {
        return $this->Frecuencia;
    }

    public function withFrecuencia(?string $Frecuencia) : static
    {
        $new = clone $this;
        $new->Frecuencia = $Frecuencia;

        return $new;
    }

    public function getCodigoPromocion() : ?string
    {
        return $this->CodigoPromocion;
    }

    public function withCodigoPromocion(?string $CodigoPromocion) : static
    {
        $new = clone $this;
        $new->CodigoPromocion = $CodigoPromocion;

        return $new;
    }

    public function getNumeroSobre() : ?string
    {
        return $this->NumeroSobre;
    }

    public function withNumeroSobre(?string $NumeroSobre) : static
    {
        $new = clone $this;
        $new->NumeroSobre = $NumeroSobre;

        return $new;
    }

    public function getBultos() : ?\Kavinsky\MRW\Type\ArrayOfBultoRequest
    {
        return $this->Bultos;
    }

    public function withBultos(?\Kavinsky\MRW\Type\ArrayOfBultoRequest $Bultos) : static
    {
        $new = clone $this;
        $new->Bultos = $Bultos;

        return $new;
    }

    public function getNumeroBultos() : ?string
    {
        return $this->NumeroBultos;
    }

    public function withNumeroBultos(?string $NumeroBultos) : static
    {
        $new = clone $this;
        $new->NumeroBultos = $NumeroBultos;

        return $new;
    }

    public function getPeso() : ?string
    {
        return $this->Peso;
    }

    public function withPeso(?string $Peso) : static
    {
        $new = clone $this;
        $new->Peso = $Peso;

        return $new;
    }

    public function getNumeroPuentes() : ?string
    {
        return $this->NumeroPuentes;
    }

    public function withNumeroPuentes(?string $NumeroPuentes) : static
    {
        $new = clone $this;
        $new->NumeroPuentes = $NumeroPuentes;

        return $new;
    }

    public function getEntregaSabado() : ?string
    {
        return $this->EntregaSabado;
    }

    public function withEntregaSabado(?string $EntregaSabado) : static
    {
        $new = clone $this;
        $new->EntregaSabado = $EntregaSabado;

        return $new;
    }

    public function getEntrega830() : ?string
    {
        return $this->Entrega830;
    }

    public function withEntrega830(?string $Entrega830) : static
    {
        $new = clone $this;
        $new->Entrega830 = $Entrega830;

        return $new;
    }

    public function getEntregaPartirDe() : ?string
    {
        return $this->EntregaPartirDe;
    }

    public function withEntregaPartirDe(?string $EntregaPartirDe) : static
    {
        $new = clone $this;
        $new->EntregaPartirDe = $EntregaPartirDe;

        return $new;
    }

    public function getGestion() : ?string
    {
        return $this->Gestion;
    }

    public function withGestion(?string $Gestion) : static
    {
        $new = clone $this;
        $new->Gestion = $Gestion;

        return $new;
    }

    public function getRetorno() : ?string
    {
        return $this->Retorno;
    }

    public function withRetorno(?string $Retorno) : static
    {
        $new = clone $this;
        $new->Retorno = $Retorno;

        return $new;
    }

    public function getCodigoServicioRetorno() : ?string
    {
        return $this->CodigoServicioRetorno;
    }

    public function withCodigoServicioRetorno(?string $CodigoServicioRetorno) : static
    {
        $new = clone $this;
        $new->CodigoServicioRetorno = $CodigoServicioRetorno;

        return $new;
    }

    public function getConfirmacionInmediata() : ?string
    {
        return $this->ConfirmacionInmediata;
    }

    public function withConfirmacionInmediata(?string $ConfirmacionInmediata) : static
    {
        $new = clone $this;
        $new->ConfirmacionInmediata = $ConfirmacionInmediata;

        return $new;
    }

    public function getReembolso() : ?string
    {
        return $this->Reembolso;
    }

    public function withReembolso(?string $Reembolso) : static
    {
        $new = clone $this;
        $new->Reembolso = $Reembolso;

        return $new;
    }

    public function getImporteReembolso() : ?string
    {
        return $this->ImporteReembolso;
    }

    public function withImporteReembolso(?string $ImporteReembolso) : static
    {
        $new = clone $this;
        $new->ImporteReembolso = $ImporteReembolso;

        return $new;
    }

    public function getTipoMercancia() : ?string
    {
        return $this->TipoMercancia;
    }

    public function withTipoMercancia(?string $TipoMercancia) : static
    {
        $new = clone $this;
        $new->TipoMercancia = $TipoMercancia;

        return $new;
    }

    public function getValorDeclarado() : ?string
    {
        return $this->ValorDeclarado;
    }

    public function withValorDeclarado(?string $ValorDeclarado) : static
    {
        $new = clone $this;
        $new->ValorDeclarado = $ValorDeclarado;

        return $new;
    }

    public function getServicioEspecial() : ?string
    {
        return $this->ServicioEspecial;
    }

    public function withServicioEspecial(?string $ServicioEspecial) : static
    {
        $new = clone $this;
        $new->ServicioEspecial = $ServicioEspecial;

        return $new;
    }

    public function getCodigoMoneda() : ?string
    {
        return $this->CodigoMoneda;
    }

    public function withCodigoMoneda(?string $CodigoMoneda) : static
    {
        $new = clone $this;
        $new->CodigoMoneda = $CodigoMoneda;

        return $new;
    }

    public function getValorEstadistico() : ?string
    {
        return $this->ValorEstadistico;
    }

    public function withValorEstadistico(?string $ValorEstadistico) : static
    {
        $new = clone $this;
        $new->ValorEstadistico = $ValorEstadistico;

        return $new;
    }

    public function getValorEstadisticoEuros() : ?string
    {
        return $this->ValorEstadisticoEuros;
    }

    public function withValorEstadisticoEuros(?string $ValorEstadisticoEuros) : static
    {
        $new = clone $this;
        $new->ValorEstadisticoEuros = $ValorEstadisticoEuros;

        return $new;
    }

    public function getNotificaciones() : ?\Kavinsky\MRW\Type\ArrayOfNotificacionRequest
    {
        return $this->Notificaciones;
    }

    public function withNotificaciones(?\Kavinsky\MRW\Type\ArrayOfNotificacionRequest $Notificaciones) : static
    {
        $new = clone $this;
        $new->Notificaciones = $Notificaciones;

        return $new;
    }

    public function getSeguroOpcional() : ?\Kavinsky\MRW\Type\SeguroOpcionalRequest
    {
        return $this->SeguroOpcional;
    }

    public function withSeguroOpcional(?\Kavinsky\MRW\Type\SeguroOpcionalRequest $SeguroOpcional) : static
    {
        $new = clone $this;
        $new->SeguroOpcional = $SeguroOpcional;

        return $new;
    }

    public function getTramoHorario() : ?string
    {
        return $this->TramoHorario;
    }

    public function withTramoHorario(?string $TramoHorario) : static
    {
        $new = clone $this;
        $new->TramoHorario = $TramoHorario;

        return $new;
    }

    public function getPortesDebidos() : ?string
    {
        return $this->PortesDebidos;
    }

    public function withPortesDebidos(?string $PortesDebidos) : static
    {
        $new = clone $this;
        $new->PortesDebidos = $PortesDebidos;

        return $new;
    }

    public function getMascara_Tipos() : ?string
    {
        return $this->Mascara_Tipos;
    }

    public function withMascara_Tipos(?string $Mascara_Tipos) : static
    {
        $new = clone $this;
        $new->Mascara_Tipos = $Mascara_Tipos;

        return $new;
    }

    public function getMascara_Campos() : ?string
    {
        return $this->Mascara_Campos;
    }

    public function withMascara_Campos(?string $Mascara_Campos) : static
    {
        $new = clone $this;
        $new->Mascara_Campos = $Mascara_Campos;

        return $new;
    }

    public function getAsistente() : ?string
    {
        return $this->Asistente;
    }

    public function withAsistente(?string $Asistente) : static
    {
        $new = clone $this;
        $new->Asistente = $Asistente;

        return $new;
    }

    public function getBurofax() : mixed
    {
        return $this->Burofax;
    }

    public function withBurofax(mixed $Burofax) : static
    {
        $new = clone $this;
        $new->Burofax = $Burofax;

        return $new;
    }
}

