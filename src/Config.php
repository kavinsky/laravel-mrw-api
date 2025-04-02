<?php

namespace Kavinsky\MRW;

readonly class Config
{

    /**
     * @param non-empty-string $wsdl
     * @param mixed[] $httpOptions
     */
    public function __construct(
        public string $wsdl,
        public array $httpOptions = [],
    ) {
    }
}
