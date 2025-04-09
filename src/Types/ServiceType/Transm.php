<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\TransmEnvio;
use Kavinsky\MRW\Types\StructType\TransmEnvioEC;
use Kavinsky\MRW\Types\StructType\TransmEnvioInternacional;
use Kavinsky\MRW\Types\StructType\TransmEnvioIntRequest;
use Kavinsky\MRW\Types\StructType\TransmEnvioRequest;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transm ServiceType
 */
class Transm extends AbstractSoapClientBase
{
    /**
     * Sets the AuthInfo SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param  \StructType\AuthInfo  $authInfo
     * @return \ServiceType\Transm
     */
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);
    }

    public function transmEnvio(TransmEnvioRequest $parameters)
    {
        $parameters = new TransmEnvio($parameters);

        try {
            $this->setResult($resultTransmEnvio = $this->getSoapClient()->__soapCall('TransmEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTransmEnvio;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    public function transmEnvioEC(TransmEnvioRequest $parameters)
    {
        $parameters = new TransmEnvioEC($parameters);

        try {
            $this->setResult($resultTransmEnvioEC = $this->getSoapClient()->__soapCall('TransmEnvioEC', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTransmEnvioEC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    public function transmEnvioInternacional(TransmEnvioIntRequest $parameters)
    {
        $parameters = new TransmEnvioInternacional($parameters);

        try {
            $this->setResult($resultTransmEnvioInternacional = $this->getSoapClient()->__soapCall('TransmEnvioInternacional', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTransmEnvioInternacional;
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
