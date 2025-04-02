<?php

namespace Kavinsky\MRW\Type;

class TransmEnvioRequest extends BaseRequest
{
    private ?ModificaDatosEnvioRequest $ModificaDatosEnvio = null;

    private ?DatosRemitenteRequest $DatosRecogida = null;

    private ?DatosDestinatarioRequest $DatosEntrega = null;

    private ?DatosServicioRequest $DatosServicio = null;

    public function getModificaDatosEnvio(): ?ModificaDatosEnvioRequest
    {
        return $this->ModificaDatosEnvio;
    }

    public function withModificaDatosEnvio(?ModificaDatosEnvioRequest $ModificaDatosEnvio): static
    {
        $new = clone $this;
        $new->ModificaDatosEnvio = $ModificaDatosEnvio;

        return $new;
    }

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

    public function getDatosEntrega(): ?DatosDestinatarioRequest
    {
        return $this->DatosEntrega;
    }

    public function withDatosEntrega(?DatosDestinatarioRequest $DatosEntrega): static
    {
        $new = clone $this;
        $new->DatosEntrega = $DatosEntrega;

        return $new;
    }

    public function getDatosServicio(): ?DatosServicioRequest
    {
        return $this->DatosServicio;
    }

    public function withDatosServicio(?DatosServicioRequest $DatosServicio): static
    {
        $new = clone $this;
        $new->DatosServicio = $DatosServicio;

        return $new;
    }
}
