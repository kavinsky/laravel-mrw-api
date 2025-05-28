<?php

namespace Kavinsky\MRW\Types\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class Get extends AbstractSoapClientBase
{
    public function GetEnvios(\Kavinsky\MRW\Types\StructType\GetEnvios $parameters)
    {
        try {
            $this->setResult($resultGetEnvios = $this->getSoapClient()->__soapCall('GetEnvios', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvios;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    public function GetEnviosByDepartamento(\Kavinsky\MRW\Types\StructType\GetEnviosByDepartamento $parameters)
    {
        try {
            $this->setResult($resultGetEnviosByDepartamento = $this->getSoapClient()->__soapCall('GetEnviosByDepartamento', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnviosByDepartamento;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    public function getResult()
    {
        return parent::getResult();
    }
}
