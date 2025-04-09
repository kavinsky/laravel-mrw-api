<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\CancelarEnvio;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancelar ServiceType
 */
class Cancelar extends AbstractSoapClientBase
{
    /**
     * Sets the AuthInfo SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param  \StructType\AuthInfo  $authInfo
     * @return \ServiceType\Cancelar
     */
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named CancelarEnvio
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthInfo
     * - SOAPHeaderNamespaces: http://www.mrw.es/
     * - SOAPHeaderTypes: \StructType\AuthInfo
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param  \StructType\CancelarEnvio  $parameters
     * @return \StructType\CancelarEnvioResponse|bool
     */
    public function CancelarEnvio(CancelarEnvio $parameters)
    {
        try {
            $this->setResult($resultCancelarEnvio = $this->getSoapClient()->__soapCall('CancelarEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCancelarEnvio;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \StructType\CancelarEnvioResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
