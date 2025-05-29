<?php

namespace Kavinsky\MRW\Types\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

#[\AllowDynamicProperties]
class GetEnviosByDepartamentoResponse extends AbstractStructBase
{
    protected ?\Kavinsky\MRW\Types\StructType\InfoSeguimiento $GetEnviosByDepartamentoResult = null;

    public function __construct(?\Kavinsky\MRW\Types\StructType\InfoSeguimiento $getEnviosByDepartamentoResult = null)
    {
        $this->setGetEnviosByDepartamentoResult($getEnviosByDepartamentoResult);
    }

    public function getGetEnviosByDepartamentoResult(): ?\Kavinsky\MRW\Types\StructType\InfoSeguimiento
    {
        return $this->GetEnviosByDepartamentoResult ?? null;
    }

    public function setGetEnviosByDepartamentoResult(?\Kavinsky\MRW\Types\StructType\InfoSeguimiento $getEnviosByDepartamentoResult = null): self
    {
        if (is_null($getEnviosByDepartamentoResult) || (is_array($getEnviosByDepartamentoResult) && empty($getEnviosByDepartamentoResult))) {
            unset($this->GetEnviosByDepartamentoResult);
        } else {
            $this->GetEnviosByDepartamentoResult = $getEnviosByDepartamentoResult;
        }

        return $this;
    }
}
