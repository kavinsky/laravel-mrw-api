<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfoSWGE;
use Kavinsky\MRW\Types\StructType\TransmitirEnvio;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioEC;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioECResponse;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioResponse;
use SoapFault;

class Transmitir extends AbstractService
{
    public function setSoapHeaderAuthInfoSWGE(AuthInfoSWGE $authInfoSWGE, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        $this->setSoapHeader($namespace, 'AuthInfoSWGE', $authInfoSWGE, $mustUnderstand, $actor);

        return $this;
    }

    public function TransmitirEnvio(TransmitirEnvio $parameters): TransmitirEnvioResponse
    {
        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('TransmitirEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof TransmitirEnvioResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }

    public function TransmitirEnvioEC(TransmitirEnvioEC $parameters): TransmitirEnvioECResponse
    {
        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('TransmitirEnvioEC', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof TransmitirEnvioECResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }
}
