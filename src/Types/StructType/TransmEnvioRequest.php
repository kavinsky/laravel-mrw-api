<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

/**
 * This class stands for TransmEnvioRequest StructType
 */
#[AllowDynamicProperties]
class TransmEnvioRequest extends BaseRequest
{
    /**
     * The ModificaDatosEnvio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ModificaDatosEnvioRequest $ModificaDatosEnvio = null;

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
    protected ?DatosDestinatarioRequest $DatosEntrega = null;

    /**
     * The DatosServicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DatosServicioRequest $DatosServicio = null;

    /**
     * Constructor method for TransmEnvioRequest
     *
     * @uses TransmEnvioRequest::setModificaDatosEnvio()
     * @uses TransmEnvioRequest::setDatosRecogida()
     * @uses TransmEnvioRequest::setDatosEntrega()
     * @uses TransmEnvioRequest::setDatosServicio()
     */
    public function __construct(?ModificaDatosEnvioRequest $modificaDatosEnvio = null, ?DatosRemitenteRequest $datosRecogida = null, ?DatosDestinatarioRequest $datosEntrega = null, ?DatosServicioRequest $datosServicio = null)
    {
        $this
            ->setModificaDatosEnvio($modificaDatosEnvio)
            ->setDatosRecogida($datosRecogida)
            ->setDatosEntrega($datosEntrega)
            ->setDatosServicio($datosServicio);
    }

    /**
     * Get ModificaDatosEnvio value
     */
    public function getModificaDatosEnvio(): ?ModificaDatosEnvioRequest
    {
        return $this->ModificaDatosEnvio;
    }

    /**
     * Set ModificaDatosEnvio value
     *
     * @return \StructType\TransmEnvioRequest
     */
    public function setModificaDatosEnvio(?ModificaDatosEnvioRequest $modificaDatosEnvio = null): self
    {
        $this->ModificaDatosEnvio = $modificaDatosEnvio;

        return $this;
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
     * @return \StructType\TransmEnvioRequest
     */
    public function setDatosRecogida(?DatosRemitenteRequest $datosRecogida = null): self
    {
        $this->DatosRecogida = $datosRecogida;

        return $this;
    }

    /**
     * Get DatosEntrega value
     */
    public function getDatosEntrega(): ?DatosDestinatarioRequest
    {
        return $this->DatosEntrega;
    }

    /**
     * Set DatosEntrega value
     *
     * @return \StructType\TransmEnvioRequest
     */
    public function setDatosEntrega(?DatosDestinatarioRequest $datosEntrega = null): self
    {
        $this->DatosEntrega = $datosEntrega;

        return $this;
    }

    /**
     * Get DatosServicio value
     */
    public function getDatosServicio(): ?DatosServicioRequest
    {
        return $this->DatosServicio;
    }

    /**
     * Set DatosServicio value
     *
     * @return \StructType\TransmEnvioRequest
     */
    public function setDatosServicio(?DatosServicioRequest $datosServicio = null): self
    {
        $this->DatosServicio = $datosServicio;

        return $this;
    }
}
