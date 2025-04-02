<?php

namespace Kavinsky\MRW;

readonly class Config
{
    /**
     * @param  non-empty-string  $wsdl
     * @param  mixed[]  $httpOptions
     */
    public function __construct(
        public string $wsdl,
        public array $httpOptions = [],
    ) {}

    public static function fromArray(array $config): self
    {
        return new self(
            wsdl: $config['wsdl'],
            httpOptions: $config['httpOptions'] ?? [],
        );
    }
}
