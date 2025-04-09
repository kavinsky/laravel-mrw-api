<?php

namespace Kavinsky\MRW\Types\StructType;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class EtiquetaEnvioResponse extends BaseResponse
{
    protected ?string $EtiquetaFile = null;

    protected ?string $EtiquetaFileZpl = null;

    public function __construct(?string $etiquetaFile = null, ?string $etiquetaFileZpl = null)
    {
        $this
            ->setEtiquetaFile($etiquetaFile)
            ->setEtiquetaFileZpl($etiquetaFileZpl);
    }

    public function getEtiquetaFile(): ?string
    {
        return $this->EtiquetaFile;
    }

    public function setEtiquetaFile(?string $etiquetaFile = null): self
    {
        // validation for constraint: string
        $this->EtiquetaFile = $etiquetaFile;

        return $this;
    }

    public function getEtiquetaFileZpl(): ?string
    {
        return $this->EtiquetaFileZpl;
    }

    public function setEtiquetaFileZpl(?string $etiquetaFileZpl = null): self
    {
        // validation for constraint: string
        $this->EtiquetaFileZpl = $etiquetaFileZpl;

        return $this;
    }
}
