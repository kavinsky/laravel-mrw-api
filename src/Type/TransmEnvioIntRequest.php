<?php

namespace Kavinsky\MRW\Type;

class TransmEnvioIntRequest extends BaseRequest
{
    private ?DatosRemitenteRequest $DatosRecogida = null;

    private ?DatosDestinatarioIntRequest $DatosEntrega = null;

    private ?DatosServicioIntRequest $DatosServicio = null;

    public function getDatosRecogida(): ?DatosRemitenteRequest
    {
        return $this->DatosRecogida;
    }

    public function withDatosRecogida(?DatosRemitenteRequest $DatosRecogida): static
    {
        $new = clone $this;
        $new->DatosRecogida = $DatosRecogida;

        return $new;
    }

    public function getDatosEntrega(): ?DatosDestinatarioIntRequest
    {
        return $this->DatosEntrega;
    }

    public function withDatosEntrega(?DatosDestinatarioIntRequest $DatosEntrega): static
    {
        $new = clone $this;
        $new->DatosEntrega = $DatosEntrega;

        return $new;
    }

    public function getDatosServicio(): ?DatosServicioIntRequest
    {
        return $this->DatosServicio;
    }

    public function withDatosServicio(?DatosServicioIntRequest $DatosServicio): static
    {
        $new = clone $this;
        $new->DatosServicio = $DatosServicio;

        return $new;
    }
}
