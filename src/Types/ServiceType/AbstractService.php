<?php

namespace Kavinsky\MRW\Types\ServiceType;

use SoapClient;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

abstract class AbstractService extends AbstractSoapClientBase
{
    public function getSoapClient(): SoapClient
    {
        return parent::getSoapClient()
            ?? throw new \RuntimeException('SoapClient not initialized');
    }
}
