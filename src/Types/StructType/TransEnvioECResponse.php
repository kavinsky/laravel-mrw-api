<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use Kavinsky\MRW\Types\ArrayType\ArrayOfLabel;

/**
 * This class stands for TransEnvioECResponse StructType
 */
#[AllowDynamicProperties]
class TransEnvioECResponse extends BaseResponse
{
    /**
     * The NumeroSolicitud
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumeroSolicitud = null;

    /**
     * The Labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ArrayOfLabel $Labels = null;

    /**
     * Constructor method for TransEnvioECResponse
     *
     * @uses TransEnvioECResponse::setNumeroSolicitud()
     * @uses TransEnvioECResponse::setLabels()
     */
    public function __construct(?string $numeroSolicitud = null, ?ArrayOfLabel $labels = null)
    {
        $this
            ->setNumeroSolicitud($numeroSolicitud)
            ->setLabels($labels);
    }

    /**
     * Get NumeroSolicitud value
     */
    public function getNumeroSolicitud(): ?string
    {
        return $this->NumeroSolicitud;
    }

    /**
     * Set NumeroSolicitud value
     *
     * @return \StructType\TransEnvioECResponse
     */
    public function setNumeroSolicitud(?string $numeroSolicitud = null): self
    {
        // validation for constraint: string
        if (! is_null($numeroSolicitud) && ! is_string($numeroSolicitud)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSolicitud, true), gettype($numeroSolicitud)), __LINE__);
        }
        $this->NumeroSolicitud = $numeroSolicitud;

        return $this;
    }

    /**
     * Get Labels value
     */
    public function getLabels(): ?ArrayOfLabel
    {
        return $this->Labels;
    }

    /**
     * Set Labels value
     *
     * @return \StructType\TransEnvioECResponse
     */
    public function setLabels(?ArrayOfLabel $labels = null): self
    {
        $this->Labels = $labels;

        return $this;
    }
}
