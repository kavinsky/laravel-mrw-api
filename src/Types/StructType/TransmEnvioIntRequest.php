<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

/**
 * This class stands for TransmEnvioIntRequest StructType
 */
#[AllowDynamicProperties]
class TransmEnvioIntRequest extends BaseRequest
{
    /**
     * The DatosRecogida
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DatosRemitenteRequest $DatosRecogida = null;

    /**
     * The DatosEntrega
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DatosDestinatarioIntRequest $DatosEntrega = null;

    /**
     * The DatosServicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DatosServicioIntRequest $DatosServicio = null;

    /**
     * Constructor method for TransmEnvioIntRequest
     *
     * @uses TransmEnvioIntRequest::setDatosRecogida()
     * @uses TransmEnvioIntRequest::setDatosEntrega()
     * @uses TransmEnvioIntRequest::setDatosServicio()
     */
    public function __construct(?DatosRemitenteRequest $datosRecogida = null, ?DatosDestinatarioIntRequest $datosEntrega = null, ?DatosServicioIntRequest $datosServicio = null)
    {
        $this
            ->setDatosRecogida($datosRecogida)
            ->setDatosEntrega($datosEntrega)
            ->setDatosServicio($datosServicio);
    }

    /**
     * Get DatosRecogida value
     */
    public function getDatosRecogida(): ?DatosRemitenteRequest
    {
        return $this->DatosRecogida;
    }

    /**
     * Set DatosRecogida value
     *
     * @return \StructType\TransmEnvioIntRequest
     */
    public function setDatosRecogida(?DatosRemitenteRequest $datosRecogida = null): self
    {
        $this->DatosRecogida = $datosRecogida;

        return $this;
    }

    /**
     * Get DatosEntrega value
     */
    public function getDatosEntrega(): ?DatosDestinatarioIntRequest
    {
        return $this->DatosEntrega;
    }

    /**
     * Set DatosEntrega value
     *
     * @return \StructType\TransmEnvioIntRequest
     */
    public function setDatosEntrega(?DatosDestinatarioIntRequest $datosEntrega = null): self
    {
        $this->DatosEntrega = $datosEntrega;

        return $this;
    }

    /**
     * Get DatosServicio value
     */
    public function getDatosServicio(): ?DatosServicioIntRequest
    {
        return $this->DatosServicio;
    }

    /**
     * Set DatosServicio value
     *
     * @return \StructType\TransmEnvioIntRequest
     */
    public function setDatosServicio(?DatosServicioIntRequest $datosServicio = null): self
    {
        $this->DatosServicio = $datosServicio;

        return $this;
    }
}
