<?php

namespace Kavinsky\MRW\Type;

class TransmEnvioIntRequest extends BaseRequest
{
    /**
     * @var null | \Kavinsky\MRW\Type\DatosRemitenteRequest
     */
    private ?\Kavinsky\MRW\Type\DatosRemitenteRequest $DatosRecogida = null;

    /**
     * @var null | \Kavinsky\MRW\Type\DatosDestinatarioIntRequest
     */
    private ?\Kavinsky\MRW\Type\DatosDestinatarioIntRequest $DatosEntrega = null;

    /**
     * @var null | \Kavinsky\MRW\Type\DatosServicioIntRequest
     */
    private ?\Kavinsky\MRW\Type\DatosServicioIntRequest $DatosServicio = null;

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

    public function getDatosEntrega() : ?\Kavinsky\MRW\Type\DatosDestinatarioIntRequest
    {
        return $this->DatosEntrega;
    }

    public function withDatosEntrega(?\Kavinsky\MRW\Type\DatosDestinatarioIntRequest $DatosEntrega) : static
    {
        $new = clone $this;
        $new->DatosEntrega = $DatosEntrega;

        return $new;
    }

    public function getDatosServicio() : ?\Kavinsky\MRW\Type\DatosServicioIntRequest
    {
        return $this->DatosServicio;
    }

    public function withDatosServicio(?\Kavinsky\MRW\Type\DatosServicioIntRequest $DatosServicio) : static
    {
        $new = clone $this;
        $new->DatosServicio = $DatosServicio;

        return $new;
    }
}

