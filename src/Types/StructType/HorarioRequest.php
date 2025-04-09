<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use Kavinsky\MRW\Types\ArrayType\ArrayOfHorarioRangoRequest;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HorarioRequest StructType
 */
#[AllowDynamicProperties]
class HorarioRequest extends AbstractStructBase
{
    /**
     * The Rangos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ArrayOfHorarioRangoRequest $Rangos = null;

    /**
     * Constructor method for HorarioRequest
     *
     * @uses HorarioRequest::setRangos()
     */
    public function __construct(?ArrayOfHorarioRangoRequest $rangos = null)
    {
        $this
            ->setRangos($rangos);
    }

    /**
     * Get Rangos value
     */
    public function getRangos(): ?ArrayOfHorarioRangoRequest
    {
        return $this->Rangos;
    }

    /**
     * Set Rangos value
     *
     * @return \StructType\HorarioRequest
     */
    public function setRangos(?ArrayOfHorarioRangoRequest $rangos = null): self
    {
        $this->Rangos = $rangos;

        return $this;
    }
}
