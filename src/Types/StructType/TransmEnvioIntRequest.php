<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class TransmEnvioIntRequest extends BaseRequest
{
    protected ?DatosRemitenteRequest $DatosRecogida = null;

    protected ?DatosDestinatarioIntRequest $DatosEntrega = null;

    protected ?DatosServicioIntRequest $DatosServicio = null;

    public function __construct(?DatosRemitenteRequest $datosRecogida = null, ?DatosDestinatarioIntRequest $datosEntrega = null, ?DatosServicioIntRequest $datosServicio = null)
    {
        $this
            ->setDatosRecogida($datosRecogida)
            ->setDatosEntrega($datosEntrega)
            ->setDatosServicio($datosServicio);
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

    public function getDatosEntrega(): ?DatosDestinatarioIntRequest
    {
        return $this->DatosEntrega;
    }

    public function setDatosEntrega(?DatosDestinatarioIntRequest $datosEntrega = null): self
    {
        $this->DatosEntrega = $datosEntrega;

        return $this;
    }

    public function getDatosServicio(): ?DatosServicioIntRequest
    {
        return $this->DatosServicio;
    }

    public function setDatosServicio(?DatosServicioIntRequest $datosServicio = null): self
    {
        $this->DatosServicio = $datosServicio;

        return $this;
    }
}
