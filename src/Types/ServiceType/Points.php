<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\GetPointsDB;
use Kavinsky\MRW\Types\StructType\GetPointsDBResponse;
use Kavinsky\MRW\Types\StructType\PointsRequest;
use SoapFault;

class Points extends AbstractService
{
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);

        return $this;
    }

    public function PointsDB(PointsRequest $parameters): GetPointsDBResponse
    {
        $parameters = new GetPointsDB($parameters);

        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('PointsDB', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof GetPointsDBResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }
}
