<?php

namespace Kavinsky\MRW;

use Kavinsky\MRW\Types\ClassMap;
use Kavinsky\MRW\Types\StructType\AuthInfo;
use Kavinsky\MRW\Types\StructType\AuthInfoSWGE;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

readonly class Config
{
    public const SERVICE_NS = 'http://www.mrw.es/';

    public function __construct(
        public string $wsdl,
        public string $trackingWsdl,
        public ?string $authUsername,
        public ?string $authPassword,
        public ?string $authFranchiseCode,
        public ?string $authClientCode,
        public ?string $authDepartment = null,
        public array $soapOptions = [],
    ) {}

    public static function fromArray(array $config): self
    {
        return new self(
            wsdl: $config['wsdl'],
            trackingWsdl: $config['tracking_wsdl'],
            authUsername: $config['auth']['username'] ?? null,
            authPassword: $config['auth']['password'] ?? null,
            authFranchiseCode: $config['auth']['franchise_code'] ?? null,
            authClientCode: $config['auth']['client_code'] ?? null,
            authDepartment: $config['auth']['department'] ?? null,
            soapOptions: $config['soapOptions'] ?? [],
        );
    }

    public function getAuthInfoSWGEHeader(): AuthInfoSWGE
    {
        return new AuthInfoSWGE(
            $this->authClientCode,
            $this->authPassword,
            $this->authDepartment,
            $this->authFranchiseCode,
            $this->authUsername,
        );
    }

    public function getAuthInfoHeader(): AuthInfo
    {
        return new AuthInfo(
            $this->authFranchiseCode,
            $this->authClientCode,
            $this->authDepartment,
            $this->authUsername,
            $this->authPassword,
        );
    }

    public function getSoapOptions(): array
    {
        return [
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_2,
            AbstractSoapClientBase::WSDL_URL => $this->wsdl,
            AbstractSoapClientBase::WSDL_TRACE => true,
            ...$this->soapOptions,
        ];
    }
}
