<?php

namespace Kavinsky\MRW\Type;

class DatosServicioIntRequest
{
    private ?string $Fecha = null;

    private ?string $Referencia = null;

    private ?string $CodigoServicio = null;

    private ?string $DescripcionServicio = null;

    private ?ArrayOfBultoIntRequest $Bultos = null;

    private ?string $NumeroBultos = null;

    private ?string $Peso = null;

    private ?string $ServicioEspecial = null;

    private ?string $CodigoMoneda = null;

    private ?string $ValorEstadistico = null;

    private ?string $ValorEstadisticoEuros = null;

    private ?NotificacionIntRequest $NotificacionSMS = null;

    private ?SeguroOpcionalRequest $SeguroOpcional = null;

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

    public function getCodigoServicio(): ?string
    {
        return $this->CodigoServicio;
    }

    public function withCodigoServicio(?string $CodigoServicio): static
    {
        $new = clone $this;
        $new->CodigoServicio = $CodigoServicio;

        return $new;
    }

    public function getDescripcionServicio(): ?string
    {
        return $this->DescripcionServicio;
    }

    public function withDescripcionServicio(?string $DescripcionServicio): static
    {
        $new = clone $this;
        $new->DescripcionServicio = $DescripcionServicio;

        return $new;
    }

    public function getBultos(): ?ArrayOfBultoIntRequest
    {
        return $this->Bultos;
    }

    public function withBultos(?ArrayOfBultoIntRequest $Bultos): static
    {
        $new = clone $this;
        $new->Bultos = $Bultos;

        return $new;
    }

    public function getNumeroBultos(): ?string
    {
        return $this->NumeroBultos;
    }

    public function withNumeroBultos(?string $NumeroBultos): static
    {
        $new = clone $this;
        $new->NumeroBultos = $NumeroBultos;

        return $new;
    }

    public function getPeso(): ?string
    {
        return $this->Peso;
    }

    public function withPeso(?string $Peso): static
    {
        $new = clone $this;
        $new->Peso = $Peso;

        return $new;
    }

    public function getServicioEspecial(): ?string
    {
        return $this->ServicioEspecial;
    }

    public function withServicioEspecial(?string $ServicioEspecial): static
    {
        $new = clone $this;
        $new->ServicioEspecial = $ServicioEspecial;

        return $new;
    }

    public function getCodigoMoneda(): ?string
    {
        return $this->CodigoMoneda;
    }

    public function withCodigoMoneda(?string $CodigoMoneda): static
    {
        $new = clone $this;
        $new->CodigoMoneda = $CodigoMoneda;

        return $new;
    }

    public function getValorEstadistico(): ?string
    {
        return $this->ValorEstadistico;
    }

    public function withValorEstadistico(?string $ValorEstadistico): static
    {
        $new = clone $this;
        $new->ValorEstadistico = $ValorEstadistico;

        return $new;
    }

    public function getValorEstadisticoEuros(): ?string
    {
        return $this->ValorEstadisticoEuros;
    }

    public function withValorEstadisticoEuros(?string $ValorEstadisticoEuros): static
    {
        $new = clone $this;
        $new->ValorEstadisticoEuros = $ValorEstadisticoEuros;

        return $new;
    }

    public function getNotificacionSMS(): ?NotificacionIntRequest
    {
        return $this->NotificacionSMS;
    }

    public function withNotificacionSMS(?NotificacionIntRequest $NotificacionSMS): static
    {
        $new = clone $this;
        $new->NotificacionSMS = $NotificacionSMS;

        return $new;
    }

    public function getSeguroOpcional(): ?SeguroOpcionalRequest
    {
        return $this->SeguroOpcional;
    }

    public function withSeguroOpcional(?SeguroOpcionalRequest $SeguroOpcional): static
    {
        $new = clone $this;
        $new->SeguroOpcional = $SeguroOpcional;

        return $new;
    }
}
