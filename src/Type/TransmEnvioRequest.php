<?php

namespace Kavinsky\MRW\Type;

class TransmEnvioRequest extends BaseRequest
{
    /**
     * @var null | \Kavinsky\MRW\Type\ModificaDatosEnvioRequest
     */
    private ?\Kavinsky\MRW\Type\ModificaDatosEnvioRequest $ModificaDatosEnvio = null;

    /**
     * @var null | \Kavinsky\MRW\Type\DatosRemitenteRequest
     */
    private ?\Kavinsky\MRW\Type\DatosRemitenteRequest $DatosRecogida = null;

    /**
     * @var null | \Kavinsky\MRW\Type\DatosDestinatarioRequest
     */
    private ?\Kavinsky\MRW\Type\DatosDestinatarioRequest $DatosEntrega = null;

    /**
     * @var null | \Kavinsky\MRW\Type\DatosServicioRequest
     */
    private ?\Kavinsky\MRW\Type\DatosServicioRequest $DatosServicio = null;

    public function getModificaDatosEnvio() : ?\Kavinsky\MRW\Type\ModificaDatosEnvioRequest
    {
        return $this->ModificaDatosEnvio;
    }

    public function withModificaDatosEnvio(?\Kavinsky\MRW\Type\ModificaDatosEnvioRequest $ModificaDatosEnvio) : static
    {
        $new = clone $this;
        $new->ModificaDatosEnvio = $ModificaDatosEnvio;

        return $new;
    }

    public function getDatosRecogida() : ?\Kavinsky\MRW\Type\DatosRemitenteRequest
    {
        return $this->DatosRecogida;
    }

    public function withDatosRecogida(?\Kavinsky\MRW\Type\DatosRemitenteRequest $DatosRecogida) : static
    {
        $new = clone $this;
        $new->DatosRecogida = $DatosRecogida;

        return $new;
    }

    public function getDatosEntrega() : ?\Kavinsky\MRW\Type\DatosDestinatarioRequest
    {
        return $this->DatosEntrega;
    }

    public function withDatosEntrega(?\Kavinsky\MRW\Type\DatosDestinatarioRequest $DatosEntrega) : static
    {
        $new = clone $this;
        $new->DatosEntrega = $DatosEntrega;

        return $new;
    }

    public function getDatosServicio() : ?\Kavinsky\MRW\Type\DatosServicioRequest
    {
        return $this->DatosServicio;
    }

    public function withDatosServicio(?\Kavinsky\MRW\Type\DatosServicioRequest $DatosServicio) : static
    {
        $new = clone $this;
        $new->DatosServicio = $DatosServicio;

        return $new;
    }
}

