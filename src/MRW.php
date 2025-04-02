<?php

namespace Kavinsky\MRW;

use Illuminate\Contracts\Events\Dispatcher;
use Kavinsky\MRW\Adapter\LaravelEventDispatchingCaller;
use Kavinsky\MRW\Adapter\LaravelHttpClient;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Soap\Psr18Transport\Psr18Transport;

/**
 * @method \Kavinsky\MRW\Type\TransmitirEnvioResponse transmitirEnvio(\Kavinsky\MRW\Type\TransmitirEnvio $parameters)
 * @method \Kavinsky\MRW\Type\TransmitirEnvioECResponse transmitirEnvioEC(\Kavinsky\MRW\Type\TransmitirEnvioEC $parameters)
 * @method \Kavinsky\MRW\Type\TransmEnvioResponse transmEnvio(\Kavinsky\MRW\Type\TransmEnvio $parameters)
 * @method \Kavinsky\MRW\Type\TransmEnvioECResponse transmEnvioEC(\Kavinsky\MRW\Type\TransmEnvioEC $parameters)
 * @method \Kavinsky\MRW\Type\GetEtiquetaEnvioResponse etiquetaEnvio(\Kavinsky\MRW\Type\GetEtiquetaEnvio $parameters)
 * @method \Kavinsky\MRW\Type\TransmEnvioInternacionalResponse transmEnvioInternacional(\Kavinsky\MRW\Type\TransmEnvioInternacional $parameters)
 * @method \Kavinsky\MRW\Type\GetEtiquetaEnvioInternacionalResponse etiquetaEnvioInternacional(\Kavinsky\MRW\Type\GetEtiquetaEnvioInternacional $parameters)
 * @method \Kavinsky\MRW\Type\CancelarEnvioResponse cancelarEnvio(\Kavinsky\MRW\Type\CancelarEnvio $parameters)
 * @method \Kavinsky\MRW\Type\GetPointsDBResponse pointsDB(\Kavinsky\MRW\Type\GetPointsDB $parameters)
 */
class MRW
{
    public function __construct(
        private Dispatcher $dispatcher,
        private Config $config,
    ) {}

    public function client(): Client
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($this->config->wsdl)
                ->withTransport(Psr18Transport::createForClient(
                    LaravelHttpClient::make($this->config->httpOptions)
                ))
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(MRWClassMap::types())
                        ->addBackedEnumClassMapCollection(MRWClassMap::enums())
                )
            // If you want to enable WSDL caching:
            // ->withCache()
            // If you want to use Alternate HTTP settings:
            // ->withWsdlLoader()
            // ->withTransport()
            // If you want specific SOAP setting:
            // ->withWsdlParserContext()
            // ->withWsdlServiceSelectionCriteria()
        );

        return new Client(
            new LaravelEventDispatchingCaller(new EngineCaller($engine), $this->dispatcher)
        );
    }

    /**
     * @param  mixed[]  $parameters
     */
    public function __call(string $method, array $parameters): mixed
    {
        return $this->client()->$method(...$parameters);
    }
}
