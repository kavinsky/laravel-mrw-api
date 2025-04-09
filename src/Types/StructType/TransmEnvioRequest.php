<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class TransmEnvioRequest extends BaseRequest
{
    protected ?ModificaDatosEnvioRequest $ModificaDatosEnvio = null;

    protected ?DatosRemitenteRequest $DatosRecogida = null;

    protected ?DatosDestinatarioRequest $DatosEntrega = null;

    protected ?DatosServicioRequest $DatosServicio = null;

    public function __construct(?ModificaDatosEnvioRequest $modificaDatosEnvio = null, ?DatosRemitenteRequest $datosRecogida = null, ?DatosDestinatarioRequest $datosEntrega = null, ?DatosServicioRequest $datosServicio = null)
    {
        $this
            ->setModificaDatosEnvio($modificaDatosEnvio)
            ->setDatosRecogida($datosRecogida)
            ->setDatosEntrega($datosEntrega)
            ->setDatosServicio($datosServicio);
    }

    public function getModificaDatosEnvio(): ?ModificaDatosEnvioRequest
    {
        return $this->ModificaDatosEnvio;
    }

    public function setModificaDatosEnvio(?ModificaDatosEnvioRequest $modificaDatosEnvio = null): self
    {
        $this->ModificaDatosEnvio = $modificaDatosEnvio;

        return $this;
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

    public function getDatosEntrega(): ?DatosDestinatarioRequest
    {
        return $this->DatosEntrega;
    }

    public function setDatosEntrega(?DatosDestinatarioRequest $datosEntrega = null): self
    {
        $this->DatosEntrega = $datosEntrega;

        return $this;
    }

    public function getDatosServicio(): ?DatosServicioRequest
    {
        return $this->DatosServicio;
    }

    public function setDatosServicio(?DatosServicioRequest $datosServicio = null): self
    {
        $this->DatosServicio = $datosServicio;

        return $this;
    }
}
