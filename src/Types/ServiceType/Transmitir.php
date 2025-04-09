<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfoSWGE;
use Kavinsky\MRW\Types\StructType\TransmitirEnvio;
use Kavinsky\MRW\Types\StructType\TransmitirEnvioEC;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transmitir ServiceType
 */
class Transmitir extends AbstractSoapClientBase
{
    /**
     * Sets the AuthInfoSWGE SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param  \StructType\AuthInfoSWGE  $authInfoSWGE
     * @return \ServiceType\Transmitir
     */
    public function setSoapHeaderAuthInfoSWGE(AuthInfoSWGE $authInfoSWGE, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'AuthInfoSWGE', $authInfoSWGE, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named TransmitirEnvio
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthInfoSWGE
     * - SOAPHeaderNamespaces: http://www.mrw.es/
     * - SOAPHeaderTypes: \StructType\AuthInfoSWGE
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param  \StructType\TransmitirEnvio  $parameters
     * @return \StructType\TransmitirEnvioResponse|bool
     */
    public function TransmitirEnvio(TransmitirEnvio $parameters)
    {
        try {
            $this->setResult($resultTransmitirEnvio = $this->getSoapClient()->__soapCall('TransmitirEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTransmitirEnvio;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named TransmitirEnvioEC
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthInfoSWGE
     * - SOAPHeaderNamespaces: http://www.mrw.es/
     * - SOAPHeaderTypes: \StructType\AuthInfoSWGE
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param  \StructType\TransmitirEnvioEC  $parameters
     * @return \StructType\TransmitirEnvioECResponse|bool
     */
    public function TransmitirEnvioEC(TransmitirEnvioEC $parameters)
    {
        try {
            $this->setResult($resultTransmitirEnvioEC = $this->getSoapClient()->__soapCall('TransmitirEnvioEC', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTransmitirEnvioEC;
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
     * @return \StructType\TransmitirEnvioECResponse|\StructType\TransmitirEnvioResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
