<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\GetPointsDB;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Points ServiceType
 */
class Points extends AbstractSoapClientBase
{
    /**
     * Sets the AuthInfo SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param  \StructType\AuthInfo  $authInfo
     * @return \ServiceType\Points
     */
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named PointsDB
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
     * @param  \StructType\GetPointsDB  $parameters
     * @return \StructType\GetPointsDBResponse|bool
     */
    public function PointsDB(GetPointsDB $parameters)
    {
        try {
            $this->setResult($resultPointsDB = $this->getSoapClient()->__soapCall('PointsDB', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultPointsDB;
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
     * @return \StructType\GetPointsDBResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
