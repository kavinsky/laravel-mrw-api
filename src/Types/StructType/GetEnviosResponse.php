<?php

namespace Kavinsky\MRW\Types\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

#[\AllowDynamicProperties]
class GetEnviosResponse extends AbstractStructBase
{
    protected ?\Kavinsky\MRW\Types\StructType\InfoSeguimiento $GetEnviosResult = null;

    public function __construct(?\Kavinsky\MRW\Types\StructType\InfoSeguimiento $getEnviosResult = null)
    {
        $this->setGetEnviosResult($getEnviosResult);
    }

    public function getGetEnviosResult(): ?\Kavinsky\MRW\Types\StructType\InfoSeguimiento
    {
        return $this->GetEnviosResult ?? null;
    }

    public function setGetEnviosResult(?\Kavinsky\MRW\Types\StructType\InfoSeguimiento $getEnviosResult = null): self
    {
        if (is_null($getEnviosResult) || (is_array($getEnviosResult) && empty($getEnviosResult))) {
            unset($this->GetEnviosResult);
        } else {
            $this->GetEnviosResult = $getEnviosResult;
        }

        return $this;
    }
}
