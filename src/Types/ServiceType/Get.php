<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\GetEnvios;
use Kavinsky\MRW\Types\StructType\GetEnviosByDepartamento;
use SoapFault;

class Get extends AbstractService
{
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'https://clientes.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this;
    }

    public function GetEnvios(GetEnvios $parameters)
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

    public function GetEnviosByDepartamento(GetEnviosByDepartamento $parameters)
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
