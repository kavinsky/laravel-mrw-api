<?php

namespace Kavinsky\MRW;

use Kavinsky\MRW\Types\ServiceType\Cancelar;
use Kavinsky\MRW\Types\ServiceType\Etiqueta;
use Kavinsky\MRW\Types\ServiceType\Get;
use Kavinsky\MRW\Types\ServiceType\Points;
use Kavinsky\MRW\Types\ServiceType\Transm;
use Kavinsky\MRW\Types\ServiceType\Transmitir;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class MRW
{
    public function __construct(
        private Config $config,
    ) {}

    public function transm(array $additionalSoapOptions = []): Transm
    {
        $client = new Transm(array_merge($this->config->getSoapOptions(), $additionalSoapOptions));
        $client->setSoapHeaderAuthInfo($this->config->getAuthInfoHeader());

        return $client;
    }

    public function transmitir(array $additionalSoapOptions = []): Transmitir
    {
        $client = new Transmitir(array_merge($this->config->getSoapOptions(), $additionalSoapOptions));
        $client->setSoapHeaderAuthInfoSWGE($this->config->getAuthInfoSWGEHeader());

        return $client;
    }

    public function cancelar(array $additionalSoapOptions = []): Cancelar
    {
        $client = new Cancelar(array_merge($this->config->getSoapOptions(), $additionalSoapOptions));
        $client->setSoapHeaderAuthInfo($this->config->getAuthInfoHeader());

        return $client;
    }

    public function points(array $additionalSoapOptions = []): Points
    {
        $client = new Points(array_merge($this->config->getSoapOptions(), $additionalSoapOptions));
        $client->setSoapHeaderAuthInfo($this->config->getAuthInfoHeader());

        return $client;
    }

    public function etiqueta(array $additionalSoapOptions = []): Etiqueta
    {
        $client = new Etiqueta(array_merge($this->config->getSoapOptions(), $additionalSoapOptions));
        $client->setSoapHeaderAuthInfo($this->config->getAuthInfoHeader());

        return $client;
    }

    public function tracking(array $additionalSoapOptions = []): Get
    {
        $opts = $this->config->getSoapOptions();
        $opts[AbstractSoapClientBase::WSDL_URL] = $this->config->trackingWsdl;
        $opts[AbstractSoapClientBase::WSDL_SOAP_VERSION] = SOAP_1_1;

        $client = new Get(array_merge($opts, $additionalSoapOptions));
        $client->setSoapHeaderAuthInfo($this->config->getAuthInfoHeader());

        return $client;
    }
}
