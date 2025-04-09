<?php

namespace Kavinsky\MRW\Types\ServiceType;

use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\EtiquetaEnvioRequest;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvio;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvioInternacional;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvioInternacionalResponse;
use Kavinsky\MRW\Types\StructType\GetEtiquetaEnvioResponse;
use SoapFault;

class Etiqueta extends AbstractService
{
    public function setSoapHeaderAuthInfo(AuthInfo $authInfo, string $namespace = 'http://www.mrw.es/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        $this->setSoapHeader($namespace, 'AuthInfo', $authInfo, $mustUnderstand, $actor);

        return $this;
    }

    public function EtiquetaEnvio(EtiquetaEnvioRequest $parameters): GetEtiquetaEnvioResponse
    {
        $parameters = new GetEtiquetaEnvio($parameters);

        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('EtiquetaEnvio', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof GetEtiquetaEnvioResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }

    public function EtiquetaEnvioInternacional(EtiquetaEnvioRequest $parameters): GetEtiquetaEnvioInternacionalResponse
    {
        $parameters = new GetEtiquetaEnvioInternacional($parameters);

        try {
            $this->setResult($result = $this->getSoapClient()->__soapCall('EtiquetaEnvioInternacional', [
                $parameters,
            ], [], [], $this->outputHeaders));

            assert($result instanceof GetEtiquetaEnvioInternacionalResponse);

            return $result;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            throw $soapFault;
        }
    }
}
