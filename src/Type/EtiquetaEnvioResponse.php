<?php

namespace Kavinsky\MRW\Type;

class EtiquetaEnvioResponse extends BaseResponse
{
    /**
     * @var null | mixed
     */
    private mixed $EtiquetaFile = null;

    /**
     * @var null | string
     */
    private ?string $EtiquetaFileZpl = null;

    public function getEtiquetaFile() : mixed
    {
        return $this->EtiquetaFile;
    }

    public function withEtiquetaFile(mixed $EtiquetaFile) : static
    {
        $new = clone $this;
        $new->EtiquetaFile = $EtiquetaFile;

        return $new;
    }

    public function getEtiquetaFileZpl() : ?string
    {
        return $this->EtiquetaFileZpl;
    }

    public function withEtiquetaFileZpl(?string $EtiquetaFileZpl) : static
    {
        $new = clone $this;
        $new->EtiquetaFileZpl = $EtiquetaFileZpl;

        return $new;
    }
}

