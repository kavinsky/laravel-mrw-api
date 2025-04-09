<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\CancelarEnvio;
use Kavinsky\MRW\Types\StructType\CancelarEnvioRequest;
use Kavinsky\MRW\Types\StructType\CancelarEnvioResponse;
use SoapFault;

class Cancelar extends AbstractService
{
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);

        return $this;
    }

    public function CancelarEnvio(CancelarEnvioRequest $parameters): CancelarEnvioResponse
    {
        $parameters = new CancelarEnvio($parameters);

        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('CancelarEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof CancelarEnvioResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }
}
