<?php

use Kavinsky\MRW\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function defaultMRWConfig(): array
{
    return [

        // PRE Environment
        'wsdl' => 'https://sagec-test.mrw.es/Web_Services/Service.asmx?WSDL',

        // PRO Environment
        // 'wsdl' => 'https://sagec.mrw.es/Web_Services/Service.asmx?WSDL',

        'abonado' => 'ABONADO',

    ];
}
