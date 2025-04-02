<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        EngineOptions::defaults('https://sagec.mrw.es/MRWEnvio.asmx?WSDL')
    ))
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('Kavinsky\MRW\Type')
    ->setClientDestination('src')
    ->setClientName('MRWClient')
    ->setClientNamespace('Kavinsky\MRW')
    ->setClassMapDestination('src')
    ->setClassMapName('MRWClassmap')
    ->setClassMapNamespace('Kavinsky\MRW')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(
        (new Assembler\GetterAssemblerOptions)->withDocBlocks(false)
    )))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        (new Assembler\ImmutableSetterAssemblerOptions)->withDocBlocks(false)
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(
                    (new Assembler\ConstructorAssemblerOptions)->withDocBlocks(false)
                )),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler),
            ])
        )
    )
    ->addRule(
        new Rules\IsExtendingTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler)
        )
    )
    ->addRule(
        new Rules\IsAbstractTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\AbstractClassAssembler)
        )
    );
