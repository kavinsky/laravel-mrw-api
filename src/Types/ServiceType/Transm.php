<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\TransmEnvio;
use Kavinsky\MRW\Types\StructType\TransmEnvioEC;
use Kavinsky\MRW\Types\StructType\TransmEnvioECResponse;
use Kavinsky\MRW\Types\StructType\TransmEnvioInternacional;
use Kavinsky\MRW\Types\StructType\TransmEnvioInternacionalResponse;
use Kavinsky\MRW\Types\StructType\TransmEnvioIntRequest;
use Kavinsky\MRW\Types\StructType\TransmEnvioRequest;
use Kavinsky\MRW\Types\StructType\TransmEnvioResponse;
use SoapFault;

class Transm extends AbstractService
{
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);

        return $this;
    }

    public function transmEnvio(TransmEnvioRequest $parameters): TransmEnvioResponse
    {
        $parameters = new TransmEnvio($parameters);

        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('TransmEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof TransmEnvioResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }

    public function transmEnvioEC(TransmEnvioRequest $parameters): TransmEnvioECResponse
    {
        $parameters = new TransmEnvioEC($parameters);

        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('TransmEnvioEC', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof TransmEnvioECResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }

    public function transmEnvioInternacional(TransmEnvioIntRequest $parameters): TransmEnvioInternacionalResponse
    {
        $parameters = new TransmEnvioInternacional($parameters);

        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('TransmEnvioInternacional', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof TransmEnvioInternacionalResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }
}
