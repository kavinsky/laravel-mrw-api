<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;

/**
 * This class stands for EtiquetaEnvioResponse StructType
 */
#[AllowDynamicProperties]
class EtiquetaEnvioResponse extends BaseResponse
{
    /**
     * The EtiquetaFile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EtiquetaFile = null;

    /**
     * The EtiquetaFileZpl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EtiquetaFileZpl = null;

    /**
     * Constructor method for EtiquetaEnvioResponse
     *
     * @uses EtiquetaEnvioResponse::setEtiquetaFile()
     * @uses EtiquetaEnvioResponse::setEtiquetaFileZpl()
     */
    public function __construct(?string $etiquetaFile = null, ?string $etiquetaFileZpl = null)
    {
        $this
            ->setEtiquetaFile($etiquetaFile)
            ->setEtiquetaFileZpl($etiquetaFileZpl);
    }

    /**
     * Get EtiquetaFile value
     */
    public function getEtiquetaFile(): ?string
    {
        return $this->EtiquetaFile;
    }

    /**
     * Set EtiquetaFile value
     *
     * @return \StructType\EtiquetaEnvioResponse
     */
    public function setEtiquetaFile(?string $etiquetaFile = null): self
    {
        // validation for constraint: string
        if (! is_null($etiquetaFile) && ! is_string($etiquetaFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etiquetaFile, true), gettype($etiquetaFile)), __LINE__);
        }
        $this->EtiquetaFile = $etiquetaFile;

        return $this;
    }

    /**
     * Get EtiquetaFileZpl value
     */
    public function getEtiquetaFileZpl(): ?string
    {
        return $this->EtiquetaFileZpl;
    }

    /**
     * Set EtiquetaFileZpl value
     *
     * @return \StructType\EtiquetaEnvioResponse
     */
    public function setEtiquetaFileZpl(?string $etiquetaFileZpl = null): self
    {
        // validation for constraint: string
        if (! is_null($etiquetaFileZpl) && ! is_string($etiquetaFileZpl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etiquetaFileZpl, true), gettype($etiquetaFileZpl)), __LINE__);
        }
        $this->EtiquetaFileZpl = $etiquetaFileZpl;

        return $this;
    }
}
