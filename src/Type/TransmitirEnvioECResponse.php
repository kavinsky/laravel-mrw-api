<?php

namespace Kavinsky\MRW\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransmitirEnvioECResponse extends BaseResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $FechaSolicitud = null;

    /**
     * @var null | string
     */
    private ?string $NumEnvio = null;

    /**
     * @var null | string
     */
    private ?string $NumEnvioLecturaPlataformas = null;

    /**
     * @var null | string
     */
    private ?string $CodigoFranquiciaDestino = null;

    /**
     * @var null | string
     */
    private ?string $NombreFranquiciaDestino = null;

    /**
     * @var null | string
     */
    private ?string $CodigoSaca = null;

    /**
     * @var null | string
     */
    private ?string $NombreSaca = null;

    /**
     * @var null | string
     */
    private ?string $CodigoRuta = null;

    /**
     * @var null | string
     */
    private ?string $CodigoTipoCobro = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionTipoCobro = null;

    /**
     * @var null | string
     */
    private ?string $CodigoTipoEnvio = null;

    /**
     * @var null | string
     */
    private ?string $NumeroPuentes = null;

    /**
     * @var null | string
     */
    private ?string $NumeroKilos = null;

    /**
     * @var null | string
     */
    private ?string $NumeroBultos = null;

    /**
     * @var null | string
     */
    private ?string $NombreServicio = null;

    /**
     * @var null | string
     */
    private ?string $NombrePlanAccionSocial = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionTipoRetorno = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionTipoGestion = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionEntregaSabado = null;

    /**
     * @var null | string
     */
    private ?string $ImporteTotalReembolso = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionTipoMercancia = null;

    /**
     * @var null | string
     */
    private ?string $HoraMaximaEntrega = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionConfirmacionInmediata = null;

    /**
     * @var null | int
     */
    private ?int $KmRecogida = null;

    /**
     * @var null | int
     */
    private ?int $KmEntrega = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionRevisionEnFranquicia = null;

    /**
     * @var null | string
     */
    private ?string $CodigoBarrasNumEnvio = null;

    /**
     * @var null | string
     */
    private ?string $CodigoBarrasNumEnvioLecturaPlataformas = null;

    /**
     * @var null | \Kavinsky\MRW\Type\TransmitirEnvioECResponse
     */
    private ?\Kavinsky\MRW\Type\TransmitirEnvioECResponse $TransmitirEnvioECResult = null;

    public function getFechaSolicitud() : ?string
    {
        return $this->FechaSolicitud;
    }

    public function withFechaSolicitud(?string $FechaSolicitud) : static
    {
        $new = clone $this;
        $new->FechaSolicitud = $FechaSolicitud;

        return $new;
    }

    public function getNumEnvio() : ?string
    {
        return $this->NumEnvio;
    }

    public function withNumEnvio(?string $NumEnvio) : static
    {
        $new = clone $this;
        $new->NumEnvio = $NumEnvio;

        return $new;
    }

    public function getNumEnvioLecturaPlataformas() : ?string
    {
        return $this->NumEnvioLecturaPlataformas;
    }

    public function withNumEnvioLecturaPlataformas(?string $NumEnvioLecturaPlataformas) : static
    {
        $new = clone $this;
        $new->NumEnvioLecturaPlataformas = $NumEnvioLecturaPlataformas;

        return $new;
    }

    public function getCodigoFranquiciaDestino() : ?string
    {
        return $this->CodigoFranquiciaDestino;
    }

    public function withCodigoFranquiciaDestino(?string $CodigoFranquiciaDestino) : static
    {
        $new = clone $this;
        $new->CodigoFranquiciaDestino = $CodigoFranquiciaDestino;

        return $new;
    }

    public function getNombreFranquiciaDestino() : ?string
    {
        return $this->NombreFranquiciaDestino;
    }

    public function withNombreFranquiciaDestino(?string $NombreFranquiciaDestino) : static
    {
        $new = clone $this;
        $new->NombreFranquiciaDestino = $NombreFranquiciaDestino;

        return $new;
    }

    public function getCodigoSaca() : ?string
    {
        return $this->CodigoSaca;
    }

    public function withCodigoSaca(?string $CodigoSaca) : static
    {
        $new = clone $this;
        $new->CodigoSaca = $CodigoSaca;

        return $new;
    }

    public function getNombreSaca() : ?string
    {
        return $this->NombreSaca;
    }

    public function withNombreSaca(?string $NombreSaca) : static
    {
        $new = clone $this;
        $new->NombreSaca = $NombreSaca;

        return $new;
    }

    public function getCodigoRuta() : ?string
    {
        return $this->CodigoRuta;
    }

    public function withCodigoRuta(?string $CodigoRuta) : static
    {
        $new = clone $this;
        $new->CodigoRuta = $CodigoRuta;

        return $new;
    }

    public function getCodigoTipoCobro() : ?string
    {
        return $this->CodigoTipoCobro;
    }

    public function withCodigoTipoCobro(?string $CodigoTipoCobro) : static
    {
        $new = clone $this;
        $new->CodigoTipoCobro = $CodigoTipoCobro;

        return $new;
    }

    public function getDescripcionTipoCobro() : ?string
    {
        return $this->DescripcionTipoCobro;
    }

    public function withDescripcionTipoCobro(?string $DescripcionTipoCobro) : static
    {
        $new = clone $this;
        $new->DescripcionTipoCobro = $DescripcionTipoCobro;

        return $new;
    }

    public function getCodigoTipoEnvio() : ?string
    {
        return $this->CodigoTipoEnvio;
    }

    public function withCodigoTipoEnvio(?string $CodigoTipoEnvio) : static
    {
        $new = clone $this;
        $new->CodigoTipoEnvio = $CodigoTipoEnvio;

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

    public function getNumeroKilos() : ?string
    {
        return $this->NumeroKilos;
    }

    public function withNumeroKilos(?string $NumeroKilos) : static
    {
        $new = clone $this;
        $new->NumeroKilos = $NumeroKilos;

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

    public function getNombreServicio() : ?string
    {
        return $this->NombreServicio;
    }

    public function withNombreServicio(?string $NombreServicio) : static
    {
        $new = clone $this;
        $new->NombreServicio = $NombreServicio;

        return $new;
    }

    public function getNombrePlanAccionSocial() : ?string
    {
        return $this->NombrePlanAccionSocial;
    }

    public function withNombrePlanAccionSocial(?string $NombrePlanAccionSocial) : static
    {
        $new = clone $this;
        $new->NombrePlanAccionSocial = $NombrePlanAccionSocial;

        return $new;
    }

    public function getDescripcionTipoRetorno() : ?string
    {
        return $this->DescripcionTipoRetorno;
    }

    public function withDescripcionTipoRetorno(?string $DescripcionTipoRetorno) : static
    {
        $new = clone $this;
        $new->DescripcionTipoRetorno = $DescripcionTipoRetorno;

        return $new;
    }

    public function getDescripcionTipoGestion() : ?string
    {
        return $this->DescripcionTipoGestion;
    }

    public function withDescripcionTipoGestion(?string $DescripcionTipoGestion) : static
    {
        $new = clone $this;
        $new->DescripcionTipoGestion = $DescripcionTipoGestion;

        return $new;
    }

    public function getDescripcionEntregaSabado() : ?string
    {
        return $this->DescripcionEntregaSabado;
    }

    public function withDescripcionEntregaSabado(?string $DescripcionEntregaSabado) : static
    {
        $new = clone $this;
        $new->DescripcionEntregaSabado = $DescripcionEntregaSabado;

        return $new;
    }

    public function getImporteTotalReembolso() : ?string
    {
        return $this->ImporteTotalReembolso;
    }

    public function withImporteTotalReembolso(?string $ImporteTotalReembolso) : static
    {
        $new = clone $this;
        $new->ImporteTotalReembolso = $ImporteTotalReembolso;

        return $new;
    }

    public function getDescripcionTipoMercancia() : ?string
    {
        return $this->DescripcionTipoMercancia;
    }

    public function withDescripcionTipoMercancia(?string $DescripcionTipoMercancia) : static
    {
        $new = clone $this;
        $new->DescripcionTipoMercancia = $DescripcionTipoMercancia;

        return $new;
    }

    public function getHoraMaximaEntrega() : ?string
    {
        return $this->HoraMaximaEntrega;
    }

    public function withHoraMaximaEntrega(?string $HoraMaximaEntrega) : static
    {
        $new = clone $this;
        $new->HoraMaximaEntrega = $HoraMaximaEntrega;

        return $new;
    }

    public function getDescripcionConfirmacionInmediata() : ?string
    {
        return $this->DescripcionConfirmacionInmediata;
    }

    public function withDescripcionConfirmacionInmediata(?string $DescripcionConfirmacionInmediata) : static
    {
        $new = clone $this;
        $new->DescripcionConfirmacionInmediata = $DescripcionConfirmacionInmediata;

        return $new;
    }

    public function getKmRecogida() : ?int
    {
        return $this->KmRecogida;
    }

    public function withKmRecogida(?int $KmRecogida) : static
    {
        $new = clone $this;
        $new->KmRecogida = $KmRecogida;

        return $new;
    }

    public function getKmEntrega() : ?int
    {
        return $this->KmEntrega;
    }

    public function withKmEntrega(?int $KmEntrega) : static
    {
        $new = clone $this;
        $new->KmEntrega = $KmEntrega;

        return $new;
    }

    public function getDescripcionRevisionEnFranquicia() : ?string
    {
        return $this->DescripcionRevisionEnFranquicia;
    }

    public function withDescripcionRevisionEnFranquicia(?string $DescripcionRevisionEnFranquicia) : static
    {
        $new = clone $this;
        $new->DescripcionRevisionEnFranquicia = $DescripcionRevisionEnFranquicia;

        return $new;
    }

    public function getCodigoBarrasNumEnvio() : ?string
    {
        return $this->CodigoBarrasNumEnvio;
    }

    public function withCodigoBarrasNumEnvio(?string $CodigoBarrasNumEnvio) : static
    {
        $new = clone $this;
        $new->CodigoBarrasNumEnvio = $CodigoBarrasNumEnvio;

        return $new;
    }

    public function getCodigoBarrasNumEnvioLecturaPlataformas() : ?string
    {
        return $this->CodigoBarrasNumEnvioLecturaPlataformas;
    }

    public function withCodigoBarrasNumEnvioLecturaPlataformas(?string $CodigoBarrasNumEnvioLecturaPlataformas) : static
    {
        $new = clone $this;
        $new->CodigoBarrasNumEnvioLecturaPlataformas = $CodigoBarrasNumEnvioLecturaPlataformas;

        return $new;
    }

    public function getTransmitirEnvioECResult() : ?\Kavinsky\MRW\Type\TransmitirEnvioECResponse
    {
        return $this->TransmitirEnvioECResult;
    }

    public function withTransmitirEnvioECResult(?\Kavinsky\MRW\Type\TransmitirEnvioECResponse $TransmitirEnvioECResult) : static
    {
        $new = clone $this;
        $new->TransmitirEnvioECResult = $TransmitirEnvioECResult;

        return $new;
    }
}

