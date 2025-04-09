<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvio;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvioInternacional;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Etiqueta ServiceType
 */
class Etiqueta extends AbstractSoapClientBase
{
    /**
     * Sets the AuthInfo SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param  \StructType\AuthInfo  $authInfo
     * @return \ServiceType\Etiqueta
     */
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named EtiquetaEnvio
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
     * @param  \StructType\GetEtiquetaEnvio  $parameters
     * @return \StructType\GetEtiquetaEnvioResponse|bool
     */
    public function EtiquetaEnvio(GetEtiquetaEnvio $parameters)
    {
        try {
            $this->setResult($resultEtiquetaEnvio = $this->getSoapClient()->__soapCall('EtiquetaEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultEtiquetaEnvio;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named EtiquetaEnvioInternacional
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
     * @param  \StructType\GetEtiquetaEnvioInternacional  $parameters
     * @return \StructType\GetEtiquetaEnvioInternacionalResponse|bool
     */
    public function EtiquetaEnvioInternacional(GetEtiquetaEnvioInternacional $parameters)
    {
        try {
            $this->setResult($resultEtiquetaEnvioInternacional = $this->getSoapClient()->__soapCall('EtiquetaEnvioInternacional', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultEtiquetaEnvioInternacional;
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
     * @return \StructType\GetEtiquetaEnvioInternacionalResponse|\StructType\GetEtiquetaEnvioResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
